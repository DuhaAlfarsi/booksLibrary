<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function library(){
      return view('/layout.home');
    }

    public function login(){
        return view('/layout.login');
      }

      public function contact(){
        return view('/layout.contact');
      }

}
