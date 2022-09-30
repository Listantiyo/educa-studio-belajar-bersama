<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LevelController extends Controller
{
    public function index()
    {
        if (Auth::user()->level == 2) {
            
            return view('Admin.dashboard.index');
        }
        else{
            return view('home.index');
        }
    }
}
