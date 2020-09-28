<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($id){
        $article = \App\Article::find($id);
        $article = json_decode(json_encode($article));
        return view('articles', ['articles'=>$article], ['id'=>$id]);
        $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });    
    }
}
