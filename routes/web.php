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

    return view('public.welcome');
});

Route::get('auth/facebook', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/get-the-facts', 'PublicPagesController@showGetTheFacts');
Route::get('/meet-those-most-impacted', 'PublicPagesController@showMeetThoseMostImpacted');

Route::resource('articles', 'ArticlesController');

Route::post('articles/{article}/comments',[
	'middleware' => 'auth',
	'uses' => 'CommentsController@store'
]);

Auth::routes();

Route::get('/api/authUser', function() {
    if(Auth::check()){
    	return response()->json(['authUser' => Auth::user()]);
    }

    return response()->json(['authUser' => false]);
});

Route::get('/account', 'AccountController@index');

Route::group(['namespace' => 'Admin'], function() {

	Route::get('/admin', [
		'as' => 'dashboard',
		'uses' => 'AdminController@dashboard'
	]);

	Route::get('/admin/welcome', [
		'as' => 'edit-welcome',
		'uses' => 'AdminController@editWelcome'
	]);

	Route::get('/admin/get-the-facts', [
		'as' => 'edit-get-the-facts',
		'uses' => 'AdminController@editGetTheFacts'
	]);

	Route::get('/admin/meet-those-most-impacted', [
		'as' => 'edit-meet-those-most-impacted',
		'uses' => 'AdminController@editMeetThoseMostImpacted'
	]);
});
