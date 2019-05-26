<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('departments', function (){

	//$departments = App\Department::all();
	return datatables()
		->eloquent(App\Department::query())
		->addColumn('btn','department.actions')
		->rawColumns(['btn'])
		->toJson();


	//echo $departments;
	//dd($departments);
		
});


Route::get('cfr_clients', function (){

	$date = date("Y-m-d");
	//$departments = App\Department::all();
	return datatables()
		->eloquent(App\Cfr_client::query()->orderBy('nombres', 'ASC'))
		->addColumn('btn','cfr_client.actions') 
		->rawColumns(['btn'])
		->toJson();


	//echo $departments;
	//dd($departments);
		
});