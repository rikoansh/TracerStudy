<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function home()
	{
		$no = 1;
		return view('alumni/home',compact('no'));
	}

	public function kontak()
	{
		$no = 1;
		return view('alumni/kontak',compact('no'));
	}
}
