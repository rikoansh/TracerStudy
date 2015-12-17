<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
    public function home()
	{
		$no = 1;
		return view('prodi/home',compact('no'));
	}
}
