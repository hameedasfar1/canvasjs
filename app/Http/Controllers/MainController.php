<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Validator;
use Auth;
use DB;

class MainController extends Controller
{
    function index()
	{
		return view('login');
	}
	
	
}
