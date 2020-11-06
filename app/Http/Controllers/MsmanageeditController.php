<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsmanageeditController extends Controller
{
    public function msmanageedit(){
        return view ('msmanageedit');
    }
    public function __construct() {     
        $this->middleware('auth');
      } 
}