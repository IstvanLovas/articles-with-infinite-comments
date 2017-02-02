<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Events\ArticleCreated;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifySubscribers
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
     * @param  ArticleCreated  $event
     * @return void
     */
    public function handle(ArticleCreated $event)
    {
        if($event->article->published_at == Carbon::today()) {
            // Send notification emails to users
            Artisan::call('created-by-parents:notify-article-subscribers', [
                'article' => $event->article->id
            ]);
        }
    }
}
