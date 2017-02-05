<?php

namespace App\Listeners;

use App\Notification;
use App\Events\NewComment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddCommentToNotifications
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewComment  $event
     * @return void
     */
    public function handle(NewComment $event)
    {
        Notification::create([
            'title' => 'New Comment',
            'comment_id' => $event->comment->id,
            'article_id' => $event->comment->article_id,
            'data' => $event->comment->text
        ]);
    }
}
