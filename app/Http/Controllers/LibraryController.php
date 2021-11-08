<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    // public function library()
    // {
    //     return view('/layout.home');
    // }
    public function contact()
    {
        return view('contact');
    }

    public function maneger()
    {
        return view('maneger');
    }
    public function client()
    {
        return view('client');
    }
}
