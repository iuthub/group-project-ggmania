<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
    $article->username=auth()->user()->username;
    $article->save();


    //return redirect()->back()->with('success','Article has been added successfully');

        return redirect('/feed/'.$article->id);
    }

    public function showArticle()
    {
        $all_articles= Article::orderBy('id', 'DESC')->get();

        return view('feed', compact('all_articles'));

    }

    public function show(Article $article)
    {

    return view('articles.show', ['article'=> $article]);

    }





    public function delete($id)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $data = Article::all();
            $data = Article::find($id);
            $data->delete();
            return redirect()->back()->with('deleted', 'Your article has been deleted');
        }    else {
            return redirect()->back()->with('detail', 'You are not Admin');
        }
    }
}

