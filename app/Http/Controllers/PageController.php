<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  // Return view Home
  public function index()
  {

    return view('home');
  }
}
