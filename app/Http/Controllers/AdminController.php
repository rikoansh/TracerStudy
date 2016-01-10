<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\User;
use App\Ts;
use App\Kontak;
use App\Berita;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\BeritaRequest;
use App\Http\Requests\KontakRequest;
use App\Http\Requests\UbahPasswordRequest;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\Role;

class AdminController extends Controller
{
    public function homeadmin()
	{
		$no = 1;
		return view('admin/home',compact('no'));
	}

	public function tes()
	{
		$no = 1;
		return view('admin/tes',compact('no'));
	}

	public function user()
	{
		$no = 1;
		$user = User::orderBy('id', 'asc')->get();
		return view('admin/user',compact('user','no'));
	}

	public function buat_user()
	{
		$roles = Role::whereIn('id', [1,3,4,5,6,7])->get();
		return view('admin/tambah_user', compact('roles'));
	}


	public function simpanuser(UserRequest $request)
	{
		
		$input = $request->all();
		$input['password'] = bcrypt($request->input('password'));

		try 
		{
		User::create($input);
		$user = User::latest()->firstOrFail();
		$role = Role::whereName($request->input('role'))->firstOrFail();
		$user->attachRole($role);
		} 
		catch (QueryException $e) {
		    return redirect()->back()->with('error', 'Username yang anda masukkan sudah ada dalam database.');
		}
		
		return redirect()->route('admin::user')->with('message', 'User baru telah ditambahkan...');
	}

	public function ubah_user($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		foreach ($user->roles as $roles) 
		{
			$role_user = $roles;
		}
		$roles = Role::where('name','!=', $role_user->name)->get();

		return view('admin/ubah_user', compact('user','role_user','roles'));
	}

	public function update_user(Request $request, $username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		foreach ($user->roles as $roles) 
		{
			$role = Role::whereName($roles->name)->firstOrFail();
			$user->detachRole($role);
		}

		$input = $request->all();
		$input['password'] = bcrypt($request->input('password'));

		try 
		{
		$user->update($input);
		$role = Role::whereName($request->input('role'))->firstOrFail();
		$user->attachRole($role);
		} 
		catch (QueryException $e) {
		    return redirect()->back()->with('error', 'Username yang anda masukkan sudah ada dalam database.');
		}
		
		return redirect()->route('admin::user')->with('message', 'User telah diupdate...');
	
	}

	public function hapus_user($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		$user->delete();

		return redirect()->route('admin::user');
	}

	public function setting()
	{
		return view('admin/setting');
	}

	public function updatesetting(UbahPasswordRequest $request)
    {
        $user = Auth::user();
        $input = $request->all();

        $password_lama = $request->input('password_lama');

        if (!Hash::check($password_lama, $user->password))
        {
            return redirect()->route('admin::setting')->with('error', 'Password lama yang anda masukkan salah.');
        }

        if ($request->input('password') == '')
        {
            $input['password'] = $user->password;
        }
        else
        {
            $input['password'] = bcrypt($request->input('password'));
        }

        try 
        {
        $user->update($input);
      
        } 
        catch (QueryException $e) {
            return redirect()->route('admin::setting')->with('pesan', 'Username yang anda masukkan sudah ada dalam database.');
        }

        return redirect()->route('admin::setting')->with('pesan', 'Password telah berhasil di ubah');
        
    }
		

	
	

######################################################################################################################################################
	

	public function ts()
	{
		$no = 1;
		$kontak = Ts::orderBy('id', 'asc')->get();
		return view('admin/ts',compact('kontak','no'));
	}

	public function hapus_ts($id)
	{
		$pengguna = Ts::whereId($id)->firstOrFail();
		$pengguna->delete();

		return redirect()->route('admin::ts');
	}
}
