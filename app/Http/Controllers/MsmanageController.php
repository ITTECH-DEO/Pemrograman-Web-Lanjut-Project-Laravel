<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsmanageController extends Controller
{
    public function mshomeedit(){
        return view ('msmanageedit');
    }
    public function __construct() {     
        $this->middleware('auth');
      } 
}