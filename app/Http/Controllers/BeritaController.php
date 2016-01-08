<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Berita;
Use App\User;
Use App\Ts;
Use App\Kontak;use File;
use Hash;
use App\Http\Requests;
use App\Http\Requests\KontakRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UbahPasswordRequest;
class BeritaController extends Controller
{
	public function homeutama()
	{
		$no = 1;
		return view('guest/homeutama',compact('no'));
	}

    public function home()
	{
		$no = 1;
		return view('alumni/home',compact('no'));
	}

	public function komentar()
	{
		$no = 1;
		return view('alumni/komentar',compact('no'));
	}
	
	public function simpan_komentar(KontakRequest $request)
	{
		$input = $request->all();

        Kontak::create($input);

        return redirect()->route('home::komentarAlumni')->with('message', 'Komentar Sudah di Masukkan');
	}

	public function berita()
	{
		$berita = Berita::latest()->paginate(5);
		return view('alumni/berita',compact('no','berita'));
	}

	public function tampil_berita($slug)
	{
		$berita  = Berita::whereSlug($slug)->firstOrFail();
		return view('alumni/tampil_berita',compact('no','berita'));
	}

	public function laporan()
	{
		$no = 1;
		return view('alumni/laporan',compact('no'));
	}

	public function tracerstudy()
	{
		$no = 1;
		return view('alumni/tracer',compact('no'));
	}

	public function simpan_tracerstudy(Request $request)
	{
		$input = $request->all();

        Ts::create($input);

        return redirect()->route('home::tracerstudy')->with('message', 'Komentar Sudah di Masukkan');
	}

	public function setting()
	{
		$no = 1;
		return view('alumni/setting',compact('no'));
	}

	public function updatepassword(UbahPasswordRequest $request)
    {
        $user = Auth::user();
        $input = $request->all();

        $password_lama = $request->input('password_lama');

        if (!Hash::check($password_lama, $user->password))
        {
            return redirect()->route('home::settingAlumni')->with('error', 'Password lama yang anda masukkan salah.');
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
            return redirect()->route('home::settingAlumni')->with('pesan', 'Username yang anda masukkan sudah ada dalam database.');
        }

        return redirect()->route('home::settingAlumni')->with('pesan', 'Password telah berhasil di ubah');
        
    }
}
