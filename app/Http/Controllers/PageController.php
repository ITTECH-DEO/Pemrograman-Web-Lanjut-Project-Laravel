<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello() {
return 'Selamat Datang';
   } 

   public function about() {
   return 'DEO FAHMAWAN <br/>
		1931710126';
}

}
