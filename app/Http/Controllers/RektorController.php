<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RektorController extends Controller
{

	public function home()
	{
		$no = 1;
		return view('rektor/home',compact('no'));
	}

	public function tracerstudy()
	{
		$no = 1;
		return view('rektor/tracerstudy',compact('no'));
	}
	public function laporan()
	{
		$no = 1;
		return view('rektor/laporan',compact('no'));
	}

	public function setting()
	{
		$no = 1;
		return view('rektor/setting',compact('no'));
	}
}
