<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		return view('akademik/user',compact('no'));
	}

	public function berita()
	{
		$no = 1;
		return view('akademik/berita',compact('no'));
	}

	public function laporan()
	{
		$no = 1;
		return view('akademik/laporan',compact('no'));
	}

	public function hasil()
	{
		$no = 1;
		return view('akademik/hasil',compact('no'));
	}
}
