<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function hello1() {
return 'Selamat Datang';
   } 

   public function about() {
return 'DEO FAHMAWAN <br/>
		1931710126';


	}
	public function hello() {
		return view('blog.hello', ['name' => 'Andi']);
		}
}
