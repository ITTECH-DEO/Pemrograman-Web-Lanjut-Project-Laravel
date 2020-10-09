<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class CobaController extends Controller
{
    public function coba() {
        $articlesAll = Article::all();
        
        $articles = json_decode(json_encode($articlesAll));
        return view('coba')->with(compact('articlesAll'));
        
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
}
}