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

Route::post('report','ReportApiController@store');
Route::get('report','ReportApiController@fetch');
Route::get('report/cid/{category}','ReportApiController@fetchReportFromCategory');
Route::get('report/sid/{subcategory}','ReportApiController@fetchReportFromSubCategory'); 
Route::post('category','CategoryController@store');
