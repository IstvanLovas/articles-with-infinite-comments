<?php

// Development Only
Route::get('/test/AfterMigrationRefresh','DevelopmentController@testAfterMigrationRefresh');
Route::get('/test/SendingWelcomeEmail','DevelopmentController@testSendingWelcomeEmail');
Route::get('/test/NotifyUserWhenArticlePublished','DevelopmentController@testNotifyUserWhenArticlePublished');

Route::get('/', 'PublicPagesController@showOurCampaign');

Route::get('/the-facts', 'PublicPagesController@showTheFacts');
Route::get('/meet-those-affected', 'PublicPagesController@showMeetThoseAffected');
Route::get('/thank-you', 'PublicPagesController@showThankYou');
Route::get('/privacy-policy', 'PublicPagesController@showPrivacyPolicy');

Route::resource('subscribers', 'SubscribersController',
                ['except' => ['index','create','show','edit']]);

Route::resource('articles', 'ArticlesController',
                ['only' => ['index', 'show']]);

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

    Route::get('/admin/privacy-policy/edit', [
        'as' => 'edit-privacy-policy',
        'uses' => 'PrivacyPolicyPageDetailController@edit'
    ]);

    Route::get('/admin/privacy-policy/update', [
        'as' => 'update-privacy-policy',
        'uses' => 'PrivacyPolicyPageDetailController@update'
    ]);

    Route::resource('/admin/articles', 'ArticlesController', [
        'names' => [
            'index' => 'article-index',
            'show' => 'article-show',
            'create' => 'article-create',
            'edit' => 'article-edit',
            'update' => 'article-update',
            'store' => 'article-store',
            'delete' => 'article-delete',
        ]
    ]);

    Route::resource('/admin/case-study', 'CaseStudyController', [
        'names' => [
            'index' => 'case-study-index',
            'show' => 'case-study-show',
            'create' => 'case-study-create',
            'edit' => 'case-study-edit',
            'update' => 'case-study-update',
            'store' => 'case-study-store',
            'delete' => 'case-study-delete',
        ]
    ]);

    Route::put('/admin/case-study/{case_study}/photo', 'CaseStudyController@addPhoto');

    Route::resource('/admin/comments', 'CommentsController', [
        'except' => ['create','store'],
        'names' => [
            'index' => 'comment-index',
            'show' => 'comment-show',
            'edit' => 'comment-edit',
            'update' => 'comment-update',
            'delete' => 'comment-delete',
        ]
    ]);
});
