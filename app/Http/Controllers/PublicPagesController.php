<?php

namespace App\Http\Controllers;

use App\Article;
use App\CaseStudy;
use App\Subscriber;
use App\ThankYouPageDetail;
use App\TheFactsPageDetail;
use Illuminate\Http\Request;
use App\OurCampaignPageDetail;
use App\PrivacyPolicyPageDetail;
use App\MeetThoseAffectedPageDetail;

class PublicPagesController extends Controller
{
    public function showOurCampaign()
    {

    	$page = OurCampaignPageDetail::findOrFail(1);

        $articles = Article::orderBy('published_at', 'desc')->published()->take(3)->get();

        return view('public.our-campaign',compact('page', 'articles'));
    }

    public function showTheFacts()
    {
        $page = TheFactsPageDetail::first();

        return view('public.the-facts',compact('page'));
    }

    public function showMeetThoseAffected()
    {
        $caseStudies = CaseStudy::latest()->get();

    	$page = MeetThoseAffectedPageDetail::first();

        return view('public.meet-those-affected',compact('page', 'caseStudies'));
    }

    public function showThankYou()
    {
    	$page = ThankYouPageDetail::first();

        return view('public.thank-you',compact('page'));
    }

    public function showPrivacyPolicy()
    {
        $page = PrivacyPolicyPageDetail::first();

        return view('public.privacy-policy',compact('page'));
    }
}
