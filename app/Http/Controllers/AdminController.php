<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Int_;

class AdminController extends Controller
{

  public function index()
  { 
    return view('products.admin');
  }

 
}