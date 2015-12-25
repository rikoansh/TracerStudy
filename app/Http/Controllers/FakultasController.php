<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		return view('fakultas/user',compact('no'));
	}

	public function berita()
	{
		$no = 1;
		return view('fakultas/berita',compact('no'));
	}

	public function useralumni()
	{
		$no = 1;
		return view('fakultas/useralumni',compact('no'));
	}

	public function hasil()
	{
		$no = 1;
		return view('fakultas/hasil',compact('no'));
	}
}
