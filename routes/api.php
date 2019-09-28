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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("employeeCountList", ['uses' => 'Api\ConnectionController@employeeCountList']);
Route::post("registration", ['uses' => 'Api\ConnectionController@registration']);
Route::get("deptId/{companyId}", ['uses' => 'Api\ConnectionController@deptId']);
//Route::post("login", ['uses' => 'Api\ConnectionController@showLogin']);
Route::post("register_company", ['uses' => 'CompanyController@store_company']);

