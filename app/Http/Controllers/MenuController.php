<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function apropos()
  {
    return view('apropos');
  }

  public function contact()
  {
    return view('contact');
  }
}
