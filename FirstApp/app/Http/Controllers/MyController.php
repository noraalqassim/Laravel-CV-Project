<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    Public function MyResume() { return view('MyResume');}
    Public function contact() { return view('contact');}
}
