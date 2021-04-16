<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome()
    {
        return view('adminHome');
    }
    public function index2()
        {
    	return view('admin_layout');
    	//return view('dashboard');
    	}
}
