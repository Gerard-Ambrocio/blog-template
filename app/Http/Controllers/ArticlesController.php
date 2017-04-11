<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Auth;

class ArticlesController extends Controller
{
    function showArticles(){
    	//$articles = ['1st article','2nd article','3rd article','4th article','5tharticle'];
    	$articles = Article::all();
    	return view('article.display', compact('articles'));
    }

    function showArticle($id){
    	$article = Article::find($id);
    	return view('article.one_article', compact('article'));
    }

    function showAddForm(){
    	return view('article.add_article');
    }

    function createArticle(Request $request){
    	$new_article = new Article();
    	$new_article->title = $request->title;
    	$new_article->content = $request->content;
    	$new_article->save();

    	return redirect('/articles');
    }

    function deleteArticle($id){
    	$article = Article::find($id);
    	$article->delete();

    	return redirect('/articles');
    }

    function showEditForm($id){
    	$article = Article::find($id);
    	return view('article.edit_article', compact('article'));
    }

    function editArticle($id, Request $request){
    	$article = Article::find($id);
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$article->save();

    	return redirect("/articles/$id");
    }

    function createComment($article_id, Request $request){
    	$comment = new Comment();
    	$comment->content = $request->content;
    	$comment->user_id = Auth::user()->id;
    	$comment->article_id = $article_id;
    	$comment->save();

    	return redirect("/articles/$article_id");
    }
}
