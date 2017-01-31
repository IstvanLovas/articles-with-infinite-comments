<?php

namespace App\Newsletters;

interface NewsletterList {

	/**
	 * Subscribe user to a newsletter list
	 * @param $listName
	 * @param $email
	 * @return mixed
	 */
	public function subscribeTo($listName, $email);

	/**
	 * Unsubscribe user from a newsletter list
	 * @param $listName
	 * @param $email
	 * @return mixed
	 */
	public function unsubscribeFrom($listName, $email);
}