<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function admin(){
        return view('admin.dashboard');
    }

    public function show(){
        return view('admin.show-users');
    }
}
