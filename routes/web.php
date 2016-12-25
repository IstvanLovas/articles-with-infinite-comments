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

    return view('welcome');
});

Route::resource('articles', 'ArticlesController');

Route::post('articles/{article}/comments',[
	'middleware' => 'auth',
	'uses' => 'CommentsController@store'
]);

Auth::routes();

Route::get('/account', 'AccountController@index');

Route::group(['namespace' => 'Admin'], function() {
	Route::get('/admin', 'AdminController@dashboard');
});
