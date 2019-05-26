	<?php

	Route::get('/', function () {
	   return redirect(route('dashboard'));
	});

	Auth::routes();

	Route::get('/home', function() {
		return redirect(route('dashboard'));
	})->name('home');

	Route::prefix('dashboard')->middleware('auth')->group(function() {
		Route::get('/', 'DashboardController@index')->name('dashboard');
		Route::resource('users', 'UserController', [
			'names' => [
				'index' => 'users'
			]
		]);

	});



Route::resource('departments', 'DepartmentController')->except([
    'create', 'store',  'destroy'
])->middleware('auth');

Route::resource('cfr_clients', 'CfrclientController')->except([
    'create', 'store',  'destroy'
])->middleware('auth');



/*
Route::resource('photos', 'DepartmentController')->only([
    'index', 'show'
]);
*/



	Route::get('logout', function() {
		auth()->logout();
		return redirect(route('login'));
	})->name('logout');