<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class HomeController extends Controller
{
    public function home() {
        $articlesAll = Article::all();
        $articles = json_decode(json_encode($articlesAll));
        return view('home')->with(compact('articlesAll'));
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
   }

  //public function home1($id) {
//$article = Article::find($id);
    //return view ('databasear',['article'=> $article],['id'=>$id]);
//} 

}
