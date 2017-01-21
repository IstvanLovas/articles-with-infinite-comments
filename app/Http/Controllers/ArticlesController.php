<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Show all Articles.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->paginate(9);

        return view('articles.index',compact('articles'));
    }

    /**
     * Show a article.
     *
     * @param  Article $article
     * @return Response
     */
    public function show(Article $article)
    {
        $comments = $article->getComments();

        return view('articles.show',compact('article', 'comments'));
    }
}
