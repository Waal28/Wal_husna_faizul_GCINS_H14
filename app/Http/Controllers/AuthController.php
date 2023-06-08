<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function register () {
        return view('form');
    }
    Public function welcome () {
        return view('welcomeee');
    }
}