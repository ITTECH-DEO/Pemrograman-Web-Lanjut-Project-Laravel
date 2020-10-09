<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class HomeControllerdash extends Controller
{
    public function dash() {
        $articlesAll = Article::all();
        $articles = json_decode(json_encode($articlesAll));
        return view('homedash')->with(compact('articlesAll'));
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
   }

  //public function home1($id) {
//$article = Article::find($id);
    //return view ('databasear',['article'=> $article],['id'=>$id]);
//} 

}
