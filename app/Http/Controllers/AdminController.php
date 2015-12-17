<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\User;
use App\Kontak;
use App\Berita;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\BeritaRequest;
use App\Http\Requests\KontakRequest;
use App\Http\Controllers\Controller;

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
		return view('admin/tambah_user');
	}


	public function simpanuser(UserRequest $request)
	{
		$input = $request->all();
		$input['password'] = bcrypt($request->input('password'));
		try
		{
		User::create($input);
		}
		catch (QueryException $e) {
			return redirect()->route('admin::tambah_user')
			->with('pesan', 'Username yang anda masukkan sudah ada dalam database.');
		}

		return redirect()->route('admin::user')
		->with('message', 'User baru telah ditambahkan...');
	}

	public function ubah_user($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		return view('admin/ubah_user', compact('user'));
	}

	public function update_user(UserRequest $request, $username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		$newpassword = input::get('password');
		$oldpassword = User::findOrFail(5)->password;

		if(bcrypt::check($newpassword, $oldpassword)){
			$tes = User::findOrFail(5);
			$tes->password = bcrypt::make(input::get('newpassword'));
			$tes->save();
		}
		else{
			var_dump('gagal');
		}

		$input = $request->all();
		return redirect()->route('admin::user');
	}

	public function tampilhapus_user($username)
	{
			$user = User::whereUsername($username)->firstOrFail();
			return view('admin/tampildelete',compact('user'));
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
		try
		{
		Berita::create($input);
		}
		catch (QueryException $e) {
			return redirect()->route('tambah_berita')
			->with('pesan', 'Username yang anda masukkan sudah ada dalam database.');
		}

		return redirect()->route('berita')
		->with('message', 'Berita baru telah ditambahkan...');
	}

	public function hapus_userberita($id)
	{
		$user = Berita::whereName($id)->firstOrFail();
		$user->delete();

		return redirect()->route('berita');
	}

	public function kontak()
	{
		$no = 1;
		$kontak = Kontak::orderBy('id', 'asc')->get();
		return view('admin/kontak',compact('kontak','no'));
	}
}
