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
}
