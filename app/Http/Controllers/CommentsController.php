<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Events\NewComment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, Article $article)
    {
        $comment = $article->addComment($request);

        event(new NewComment($comment));

        if($request->ajax())
        {
            return response()->json([
                'message' => 'You have succesfully submitted a comment!',
            ]);
        }

        return back();
    }
}
