<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function reviews(){
        return view ('reviews');
    }
    public function __construct() {     
        $this->middleware('auth');
      } 
}
