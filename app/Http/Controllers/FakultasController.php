<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\User;
use App\Ts;
use App\Maba;
use App\Kontak;
use App\Alumni;
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
class FakultasController extends Controller
{
     public function home()
	{
		$no = 1;
		return view('fakultas/home',compact('no'));
	}

public function user()
	{
		$no = 1;
		$user = Maba::where('fakultas', '=', 'Teknik')->get();
		return view('fakultas/user',compact('no','user'));
	}

	public function buat_user()
	{
		$roles = Role::whereIn('id', [2])->get();
		return view('fakultas/tambah_user', compact('roles'));
	}

	public function simpanuser(Request $request)
	{
		
		$input = $request->all();

        Maba::create($input);

        return redirect()->route('fakultas::user')->with('message', 'User Sudah di Masukkan');
	}

	public function ubah_user($nim)
	{
		$user = Maba::whereNim($nim)->firstOrFail();

		return view('fakultas/ubah_user', compact('user'));
	}

	public function update_user(Request $request, $nim)
	{
		$user = Maba::whereNim($nim)->firstOrFail();
		$input = $request->all();
		
		try 
		{
		$user->update($input);
		} 
		catch (QueryException $e) {
		    return redirect()->back()
		    ->with('gagal', 'Gagal Mengupdate');
		}
		return redirect()->route('fakultas::user')
		->with('pesan', 'User telah berhasil di update.');
	}

	public function hapus_user($nim)
	{
		$user = Maba::whereNim($nim)->firstOrFail();
		$user->delete();

		return redirect()->route('fakultas::user');
	}
###########################################################################################################################################
	public function berita()
	{
		$no = 1;
		$berita = Berita::orderBy('created_at', 'asc')->get();
		return view('fakultas/berita',compact('berita','no'));
	}


	public function buat_berita()
	{
		return view('fakultas/tambah_berita');
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

         return redirect()->route('fakultas::berita');
	}

	public function ubah_berita($id)
    {
        $berita = Berita::whereId($id)->firstOrFail();
        return view('fakultas/ubah_berita', compact('berita'));
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

        return redirect('fakultas::berita')
            ->with('sukses', 'Berita telah diupdate');
    }

	public function hapus_berita($id)
	{
		$pengguna = Berita::whereId($id)->firstOrFail();
		$pengguna->delete();

		return redirect()->route('fakultas::berita');
	}

###################################################################################################################################
	public function hasil()
	{
		$no = 1;
		return view('fakultas/hasil',compact('no'));
	}
#####################################################################################################################
	public function kartu()
	{
		$no = 1;
		return view('fakultas/kartu',compact('no'));
	}

############################################################################################################################################
	public function transfer()
	{
		$no = 1;
		return view('fakultas/transfer',compact('no'));
	}

	public function data_maba()
	{	
		$no = 1;
		$maba = Maba::where('fakultas', '=', 'Teknik')->orderBy('prodi', 'asc')->get();
		return view('fakultas/data_maba',compact('maba','no'));
	}

	public function transfer_data($nama)
	{	
		$no = 1;
		$tes = Maba::whereNama($nama)->firstOrFail();
		return view('fakultas/transfer_data',compact('maba','tes','no'));
	}

	public function simpan_data(Request $request)
	{	
		$input = $request->all();
        Alumni::create($input);
        return redirect()->route('fakultas::data_maba');
	}

	public function data_alumni()
	{	
		$no = 1;
		$alumni = Alumni::orderBy('prodi', 'asc')->get();
		return view('fakultas/data_alumni',compact('alumni','no'));
	}

	public function ubah_alumni($nama)
    {
        $alumni = Alumni::whereNama($nama)->firstOrFail();
        return view('fakultas/ubah_alumni', compact('alumni'));
    }

    public function update_alumni(Request $request, $nama)
	{	
		$alumni = Alumni::whereNama($nama)->firstOrFail();
		$input = $request->all();
		
		try 
		{
		$alumni->update($input);
		} 
		catch (QueryException $e) {
		    return redirect()->back()
		    ->with('gagal', 'Gagal Mengupdate');
		}
		return redirect()->route('fakultas::data_alumni')
		->with('pesan', 'Status telah berhasil di update.');

		
	}


########################################################################################################################################

	public function saran()
	{
		$no = 1;
		$kontak = Kontak::orderBy('id', 'asc')->get();
		return view('fakultas/saran',compact('kontak','no'));
	}

}
