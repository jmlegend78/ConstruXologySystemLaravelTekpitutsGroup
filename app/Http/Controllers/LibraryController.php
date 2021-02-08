<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function loginpage(){
    	return view ('loginpage');
    }
    public function books(){
    	return view ('books');
    }
    public function updateacc(){
    	return view ('updateacc');
    }
}