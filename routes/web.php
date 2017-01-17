<?php

Route::get('/', 'PublicPagesController@showOurCampaign');
Route::get('/the-facts', 'PublicPagesController@showTheFacts');
Route::get('/meet-those-affected', 'PublicPagesController@showMeetThoseAffected');
Route::get('/thank-you', 'PublicPagesController@showThankYou');

Route::resource('articles', 'ArticlesController');

Route::post('articles/{article}/comments', [
    'middleware' => 'auth',
    'uses' => 'CommentsController@store'
]);

Auth::routes();

Route::get('auth/facebook', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/api/authUser', function () {
    if (Auth::check()) {
        return response()->json(['authUser' => Auth::user()]);
    }

    return response()->json(['authUser' => false]);
});

Route::get('/account', 'AccountController@index');

Route::group(['namespace' => 'Admin'], function () {

    Route::get('/admin', [
        'as' => 'dashboard',
        'uses' => 'AdminController@dashboard'
    ]);

    Route::get('/admin/our-campaign/edit', [
        'as' => 'edit-our-campaign',
        'uses' => 'OurCampaignPageDetailController@edit'
    ]);

    Route::patch('/admin/our-campaign/update', [
        'as' => 'update-our-campaign',
        'uses' => 'OurCampaignPageDetailController@update'
    ]);

    Route::get('/admin/the-facts/edit', [
        'as' => 'edit-the-facts',
        'uses' => 'TheFactsPageDetailController@edit'
    ]);

    Route::patch('/admin/the-facts/update', [
        'as' => 'update-the-facts',
        'uses' => 'TheFactsPageDetailController@update'
    ]);

    Route::get('/admin/meet-those-affected/edit', [
        'as' => 'edit-meet-those-affected',
        'uses' => 'MeetThoseAffectedPageDetailController@edit'
    ]);

    Route::get('/admin/meet-those-affected/update', [
        'as' => 'update-meet-those-affected',
        'uses' => 'MeetThoseAffectedPageDetailController@update'
    ]);

    Route::get('/admin/thank-you/edit', [
        'as' => 'edit-thank-you',
        'uses' => 'ThankYouPageDetailController@edit'
    ]);

    Route::get('/admin/thank-you/update', [
        'as' => 'update-thank-you',
        'uses' => 'ThankYouPageDetailController@update'
    ]);

    Route::get('/admin/case-studies/index', [
        'as' => 'case-studies-index',
        'uses' => 'CaseStudyController@index'
    ]);

    Route::get('/admin/case-studies/create', [
        'as' => 'case-studies-create',
        'uses' => 'CaseStudyController@create'
    ]);

    Route::post('/admin/case-studies/store', [
        'as' => 'case-studies-store',
        'uses' => 'CaseStudyController@store'
    ]);
});
