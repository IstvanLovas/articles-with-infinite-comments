<?php

Route::get('/', function () {
    // \App\Tag::create(['name' => 'law']);
    // \App\Tag::create(['name' => 'discussion']);
    // \App\Tag::create(['name' => 'person']);
    // \App\Tag::create(['name' => 'other']);
    // \App\Role::create(['name' => 'admin']);
 //    $role = \App\Role::whereName('admin')->first();
 //    $user = \App\User::create([
 //     'name' => 'Istvan Lovas',
 //     'email' => 'loleves@gmail.com',
 //     'password' => Hash::make('jujuka')
 //    ]);
 //    $user = \App\User::where('email', 'loleves@gmail.com')->first();
 //    $user->roles()->attach($role);
 //    return \App\User::with('roles')->find(1);

    return view('public.our-campaign');
});

Route::get('/the-facts', 'PublicPagesController@showTheFacts');
Route::get('/meet-those-affected', 'PublicPagesController@showMeetThoseAffected');

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
        'uses' => 'WelcomePageDetailController@edit'
    ]);

    Route::patch('/admin/our-campaign/update', [
        'as' => 'update-our-campaign',
        'uses' => 'WelcomePageDetailController@update'
    ]);

    Route::get('/admin/the-facts/edit', [
        'as' => 'edit-the-facts',
        'uses' => 'GetTheFactsPageDetailController@edit'
    ]);

    Route::patch('/admin/the-facts/update', [
        'as' => 'update-the-facts',
        'uses' => 'GetTheFactsPageDetailController@update'
    ]);

    Route::get('/admin/meet-those-affected/edit', [
        'as' => 'edit-meet-those-affected',
        'uses' => 'MeetThoseMostImpactedPageDetailController@edit'
    ]);

    Route::get('/admin/meet-those-affected/update', [
        'as' => 'update-meet-those-affected',
        'uses' => 'MeetThoseMostImpactedPageDetailController@update'
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
