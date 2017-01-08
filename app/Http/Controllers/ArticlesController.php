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
     * Create a new Articles controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

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

    /**
     * Show the page the Create an Article Form.
     * @return Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Save a new article.
     *
     * @param  ArticleRequest  $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        // $this->createArticle($request);
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

        return $article->id;
    }

    /**
     * Save a new Article
     * 
     * @param  ArticleRequest $request
     * @return mixed
     */
    private function createArticle(ArticleRequest $request)
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

        return $article;
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
        $tags = Tag::pluck('name', 'id');

        return view('articles.edit',compact('article', 'tags'));
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
        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return redirect('articles');
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

        return redirect('articles');
    }
}
