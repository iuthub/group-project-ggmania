<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addArticle(Request $request)
    {
    $article= new Article();
    $article->Content=$request->Content;
    $article->Title=$request->Title;
    $article->Topic=$request->Topic;
    $article->save();
    }
    public function showArticle()
    {
        $all_articles= Article::orderBy('id', 'DESC')->get();

        return view('feed', compact('all_articles'));

    }
}

