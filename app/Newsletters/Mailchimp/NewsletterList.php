<?php

namespace App\Newsletters\Mailchimp;

use Mailchimp;
use App\Newsletters\NewsletterList as NewsletterListInterface;

class NewsletterList implements NewsletterListInterface {
	
	protected $mailchimp;

	protected $lists = [
		'articleSubscribers' => '3741bcdac6'
	];

	public function __construct(Mailchimp $mailchimp)
	{
		$this->mailchimp = $mailchimp;
	}


	/**
	 * Subscribe user to a Mailchimp list
	 * @param $listName
	 * @param $email
	 * @return mixed
	 */
	public function subscribeTo($listName, $email)
	{
		return $this->mailchimp->lists->subscribe(
			$this->lists[$listName],
			['email' => $email],
			null, // merge vars,
			'html', // email type,
			false, // require double opt-in,
			true // update existing customer
		);
	}

	/**
	 * Unsubscribe user from a newsletter list
	 * @param $listName
	 * @param $email
	 * @return mixed
	 */
	public function unsubscribeFrom($listName, $email)
	{
		return $this->mailchimp->lists->unsubscribe(
			$this->lists[$listName],
			['email' => $email],
			false, // delete member permanently
			false, // send goodbye email
			false // send unsubscribe notification email
		);
	}
}