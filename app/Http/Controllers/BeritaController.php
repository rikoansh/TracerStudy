<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
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

	public function berita()
	{
		$no = 1;
		return view('alumni/berita',compact('no'));
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

	public function setting()
	{
		$no = 1;
		return view('alumni/setting',compact('no'));
	}
}
