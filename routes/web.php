<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    return view('welcome');
// });

Auth::routes();

//Route::get('/', 'App\Http\Controllers\MenuController@getMenu');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/wf', 'App\Http\Controllers\PagesController@getWF');

Route::get('current', 'App\Http\Controllers\PagesController@current');

Route::get('/graphs/mtd', 'App\Http\Controllers\PagesController@graphMtd');
Route::get('/graphs/current', 'App\Http\Controllers\PagesController@graphCurrent');
Route::get('/graphs/last', 'App\Http\Controllers\PagesController@graphLast');

Route::get('/moon', 'App\Http\Controllers\PagesController@moon');

Route::get('/records/all', 'App\Http\Controllers\PagesController@recordsAll');
Route::get('/records/month', 'App\Http\Controllers\PagesController@recordsMonth');
Route::get('/records/year', 'App\Http\Controllers\PagesController@recordsYear');
Route::get('/records/2021', 'App\Http\Controllers\PagesController@records2021');

Route::get('/wdlive', 'App\Http\Controllers\PagesController@wdLive');


Route::get('/reports/aveext/{year}/{month}', 'App\Http\Controllers\ReportsController@reportsAveExtremeMonth');

Route::get('/reports/dailylog', 'App\Http\Controllers\ReportsController@reportsDailyLog');
Route::get('/reports/daily', 'App\Http\Controllers\ReportsController@reportsDaily');
Route::get('/reports/weatherdata', 'App\Http\Controllers\ReportsController@reportsWeatherData');

Route::get('/reports/climatedata/currentyear', 'App\Http\Controllers\ReportsController@reportsClimateCurrentYear');
Route::get('/reports/climatedata/currentmonth', 'App\Http\Controllers\ReportsController@reportsClimateCurrentMonth');
Route::get('/reports/climatedata/history/{year}', 'App\Http\Controllers\ReportsController@reportsClimateYear');
Route::get('/reports/climatedata/history/{year}/{month}', 'App\Http\Controllers\ReportsController@reportsClimateMonth');

Route::get('/reports/noaa/currentyear', 'App\Http\Controllers\ReportsController@reportsNoaaCurrentYear');
Route::get('/reports/noaa/currentmonth', 'App\Http\Controllers\ReportsController@reportsNoaaCurrentMonth');
Route::get('/reports/noaa/history/{year}', 'App\Http\Controllers\ReportsController@reportsNoaaYear');
Route::get('/reports/noaa/history/{year}/{month}', 'App\Http\Controllers\ReportsController@reportsNoaaMonth');
