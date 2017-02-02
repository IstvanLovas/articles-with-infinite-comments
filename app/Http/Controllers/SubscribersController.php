<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Newsletters\NewsletterList;
use App\Http\Requests\SubscriberRequest;

class SubscribersController extends Controller
{
    protected $newsletterList;

    public function __construct(NewsletterList $newsletterList)
    {
        $this->newsletterList = $newsletterList;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriberRequest $request)
    {
        $subscriber = Subscriber::create($request->all());

        $this->newsletterList->subscribeTo('articleSubscribers', $subscriber->email);

        return response()->json([
            'subscriber_name' => $subscriber->name,
            'success' => [
                'message' => 'You have successfully created a new Article.'
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        // Should fire off an event
        $subscriber->updateSubscription($request->input('notify'));

        $method = $request->input('notify') ? 'subscribeTo' : 'unsubscribeFrom';

        $this->newsletterList->{$method}('articleSubscribers', $subscriber->email);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
