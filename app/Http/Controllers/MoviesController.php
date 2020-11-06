<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function movies(){
        return view ('movies');
    }
    public function __construct() {     
        $this->middleware('auth');
      } 
}
