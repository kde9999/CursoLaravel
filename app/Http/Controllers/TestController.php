<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{

  public function view ($id){
      $article = Article::find($id);
      //dd($article);
      //  $article->each(function ($article){
        $article->category;
        $article->user;
        $article->tags;
        //dd($article);
        return view('test.index',['article'=>$article]);

      }







}
