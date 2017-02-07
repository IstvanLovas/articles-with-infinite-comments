<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->get();

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $this->checkNotification($comment->id);

        return view('admin.comments.show', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Comment $comment, Request $request)
    {
        $comment->update($request->only('approved'));

        $this->checkNotification($comment->id);

        if($request->ajax())
        {
            return response()->json([
                'message' => 'Status modified!',
            ]);
        }

        return back();
    }

    public function checkNotification($id)
    {
        $notification = Notification::where('comment_id', $id)->first();

        if($notification)
        {
            $notification->delete();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
