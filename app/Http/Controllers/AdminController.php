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
		$roles = Role::latest()->get();
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
            return redirect()->back()->with('error', 'Password lama yang anda masukkan salah.');
        }

        if ($request->input('password') == '')
        {
            $input['password'] = $user->password;
        }
        else
        {
            $input['password'] = bcrypt($request->input('password'));
        }

        return redirect()->route('admin::setting')->with('message', 'Profil user telah diupdate...');

    }
		

	
	public function hapus_user($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		$user->delete();

		return redirect()->route('admin::user');
	}

######################################################################################################################################################
	public function berita()
	{
		$no = 1;
		$berita = Berita::orderBy('created_at', 'asc')->get();
		return view('admin/berita',compact('berita','no'));
	}


	public function buat_berita()
	{
		return view('admin/tambah_berita');
	}

	public function simpanberita(BeritaRequest $request)
	{
		$input = $request->all();

        $input['slug'] = str_slug($request->input('judul'));

        if($request->hasFile('gambar'))
        {
        $nama_file = $input['gambar']->getClientOriginalName();
        $save_path = 'images/';

        #save ke komputer
        $input['gambar']->move($save_path,$nama_file);
        
        #masuk ke database
        $input['gambar'] = $save_path.$nama_file;
        }
        else
        {
            $input['gambar']= '';
        }

        Berita::create($input);

         return redirect()->route('admin::berita');
	}

	public function ubah_berita($id)
    {
        $berita = Berita::whereId($id)->firstOrFail();
        return view('admin/ubah_berita', compact('berita'));
    }

	public function update_berita(Request $request, $id)
    {
        $berita = Berita::whereId($id)->firstOrFail();
        
        $input=$request->all();
        
        $input['slug'] = str_slug($request->input('judul'));

        if($request->hasFile('gambar'))
        {
        $nama_file = $input['gambar']->getClientOriginalName();
        $save_path = 'images/';

        #save ke komputer
        $input['gambar']->move($save_path,$nama_file);
        
        #masuk ke database
        $input['gambar'] = $save_path.$nama_file;
        }
        else
        {
            $input['gambar']= '';
        }
        
        try
        {
            $berita->update($input);
        }
        catch (QueryException $e)
        {
            return redirect()->back()
            ->with('gagal', 'Judul yang ada masukkan sudah ada');
        }

        return redirect('admin::berita')
            ->with('sukses', 'Berita telah diupdate');
    }

	public function hapus_berita($id)
	{
		$pengguna = Berita::whereId($id)->firstOrFail();
		$pengguna->delete();

		return redirect()->route('admin::berita');
	}

	public function kontak()
	{
		$no = 1;
		$kontak = Kontak::orderBy('id', 'asc')->get();
		return view('admin/kontak',compact('kontak','no'));
	}

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
