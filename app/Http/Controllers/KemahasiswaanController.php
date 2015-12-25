<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KemahasiswaanController extends Controller
{
    public function home()
	{
		$no = 1;
		return view('kemahasiswaan/home',compact('no'));
	}

	public function user()
	{
		$no = 1;
		return view('kemahasiswaan/user',compact('no'));
	}

	public function berita()
	{
		$no = 1;
		return view('kemahasiswaan/berita',compact('no'));
	}

	public function useralumni()
	{
		$no = 1;
		return view('kemahasiswaan/useralumni',compact('no'));
	}

	public function hasil()
	{
		$no = 1;
		return view('kemahasiswaan/hasil',compact('no'));
	}
}
