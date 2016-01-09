<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\User;
use App\Ts;
use App\Maba;
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

class AkademikController extends Controller
{
    public function home()
	{
		$no = 1;
		return view('akademik/home',compact('no'));
	}

	public function user()
	{
		$no = 1;
		$user = Maba::all();
		return view('akademik/user',compact('no','user'));
	}

	public function buat_user()
	{
		$roles = Role::whereIn('id', [2])->get();
		return view('akademik/tambah_user', compact('roles'));
	}

	public function simpanuser(Request $request)
	{
		
		$input = $request->all();

        Maba::create($input);

        return redirect()->route('akademik::user')->with('message', 'User Sudah di Masukkan');
	}

	public function ubah_user($nim)
	{
		$user = Maba::whereNim($nim)->firstOrFail();

		return view('akademik/ubah_user', compact('user'));
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
		return redirect()->route('akademik::user')
		->with('pesan', 'User telah berhasil di update.');
	}

	public function hapus_user($nim)
	{
		$user = Maba::whereNim($nim)->firstOrFail();
		$user->delete();

		return redirect()->route('akademik::user');
	}
#############################################################################################################################################################	
	public function berita()
	{
		$no = 1;
		$berita = Berita::orderBy('created_at', 'asc')->get();
		return view('akademik/berita',compact('berita','no'));
	}


	public function buat_berita()
	{
		return view('akademik/tambah_berita');
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

         return redirect()->route('akademik::berita');
	}

	public function ubah_berita($id)
    {
        $berita = Berita::whereId($id)->firstOrFail();
        return view('akademik/ubah_berita', compact('berita'));
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

        return redirect('akademik::berita')
            ->with('sukses', 'Berita telah diupdate');
    }

	public function hapus_berita($id)
	{
		$pengguna = Berita::whereId($id)->firstOrFail();
		$pengguna->delete();

		return redirect()->route('akademik::berita');
	}
#########################################################################################################################################
	public function laporan()
	{
		$no = 1;
		return view('akademik/laporan',compact('no'));
	}


##############################################################################################################################
	public function hasil()
	{
		$no = 1;
		return view('akademik/hasil',compact('no'));
	}
}
