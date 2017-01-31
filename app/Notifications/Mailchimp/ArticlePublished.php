<?php

namespace App\Notifications\Mailchimp;

use Mailchimp;
use App\Notifications\ArticlePublished as ArticlePublishedInterface;


class ArticlePublished implements ArticlePublishedInterface
{
    /**
     * 
     * List ID
     */
    const ARTICLE_SUBSCRIBERS_ID = '3741bcdac6';

    /**
     * 
     * @var Mailchimp
     */
    protected $mailchimp;

    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * Notify user when an article has been published
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body)
    {
        $options = [
            'list_id' => self::ARTICLE_SUBSCRIBERS_ID,
            'subject' => 'New article on Created by parents' . $title,
            'from_name' => env('APP_NAME'),
            'from_email' => env('MAIL_FROM_ADDRESS'),
            'to_name' => env('APP_NAME') . 'Subscriber',
        ];

        $content = [
            'html' => $body,
            'text' => strip_tags($body)
        ];

        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

        $this->mailchimp->campaigns->send($campaign['id']);
    }
}
