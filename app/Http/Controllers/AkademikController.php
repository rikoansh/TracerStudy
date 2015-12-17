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
}
