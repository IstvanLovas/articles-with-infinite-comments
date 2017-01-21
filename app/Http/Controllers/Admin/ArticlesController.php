<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        return view('admin.articles.index',compact('articles'));
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

    /**
     * Show the Create an Article Form.
     * @return Response
     */
    public function create()
    {
        $tags = Tag::all();
        
        return view('admin.articles.create', compact('tags'));
    }

    /**
     * Save a new article.
     *
     * @param  ArticleRequest  $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $tagIds = [];
        $tags = $request->input('tagList');
        $article = Auth::user()->articles()->create($request->all());
        
        if(count($tags) > 0)
        {
            foreach($tags as $tag)
            {
                $tagIds[] = Tag::firstOrCreate(['name' => $tag['name']])->id;
            }

            $this->syncTags($article, $tagIds);
        }

        return response()->json([
            'id' => $article->id,
            'success' => [
                'message' => 'You have successfully created a new Article.'
            ]
        ]);
    }

    /**
     * Sync up the list of tags in the database.
     *
     * @param  Article $article
     * @param  array   $tags
     */
    private function syncTags(Article $article, $tag)
    {
        $article->tags()->sync($tag);
    }

    /**
     * Show the page the Edit Article form.
     *
     * @param  Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();

        $articleTags = $article->tags()->get();

        return view('admin.articles.edit',compact('article', 'tags', 'articleTags'));
    }

    /**
     * Update an Article.
     *
     * @param  ArticleRequest  $request
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $tagIds = [];
        $tags = $request->input('tagList');
        
        $article->update($request->all());

        if(count($tags) > 0)
        {
            foreach($tags as $tag)
            {
                $tagIds[] = Tag::firstOrCreate(['name' => $tag['name']])->id;
            }

            $this->syncTags($article, $tagIds);
        }

        return response()->json([
            'success' => [
                'message' => 'Article saved.'
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return response()->json([
            'success' => [
                'message' => 'Article deleted.'
            ]
        ]);
    }
}
