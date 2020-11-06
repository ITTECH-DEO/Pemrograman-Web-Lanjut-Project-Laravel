<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class MsmanagerubahController extends Controller
{
    public function rubah(){
        return view ('msmanagerubah');
    }
    public function __construct() {     
        $this->middleware('auth');
      } 
}