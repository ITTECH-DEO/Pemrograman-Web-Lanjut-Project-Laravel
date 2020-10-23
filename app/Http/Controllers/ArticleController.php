<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
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
    public function index()     {         
        $article = Article::all();         
        return view('manage',['articles' => $article]);     
    }
    public function add()
    {
        return view('msmanageedit');
    } 
    public function create(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'genre' => $request->genre,
            'featured_image' => $request->image
        ]);
        // $article = json_decode(json_encode($article));
        // echo "</pre>"; print_r($article); die; 
        return redirect('/manage');
    }
    public function edit($id)     {       
          $article = Article::find($id);        
          return view('msmanagerubah',['article'=>$article]);   
          }
          public function update($id, Request $request)     {       
                $article = Article::find($id);        
                 $article->title = $request->title;       
                $article->content = $request->content;     
                       $article->featured_image = $request->image;   
                             $article->save();       
                               return redirect('/manage');    
         } 
         public function delete($id)
    {
        $articles = Article::find($id);
        $articles->delete();
        return redirect('/manage');
    }
 
}
