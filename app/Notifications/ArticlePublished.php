<?php

namespace App\Notifications;

interface ArticlePublished {

	/**
	 * Notify user when an article has been published
	 * @param $title
	 * @param $body
	 * @return mixed
	 */
	public function notify($title, $body);
}