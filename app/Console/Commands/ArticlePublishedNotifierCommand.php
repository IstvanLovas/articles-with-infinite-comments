<?php

namespace App\Console\Commands;

use App\Article;
use Illuminate\Console\Command;
use App\Notifications\ArticlePublished;

class ArticlePublishedNotifierCommand extends Command
{
    private $articlePublishedNotifier;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'created-by-parents:notify-article-subscribers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify all articles subscribers by email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ArticlePublished $articlePublishedNotifier)
    {
        parent::__construct();

        $this->articlePublishedNotifier = $articlePublishedNotifier;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $article = $this->getArticle();

        $this->articlePublishedNotifier->notify($article['title'], $article['body']);
    }

    public function getArticle()
    {
        $article = Article::first();

        return $article;
    }
}
