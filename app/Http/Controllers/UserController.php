<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function user(){
        return view ('user');
    }
    public function __construct() {     
        $this->middleware('auth');
      } 
}