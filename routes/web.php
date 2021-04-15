<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReportsController;

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

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});


Route::get('/', [PagesController::class, 'index']);
Route::get('/wf', [PagesController::class, 'getWF']);
Route::get('/fire', [PagesController::class, 'nrFire']);
Route::get('/current', [PagesController::class, 'current']);
Route::get('/moon', [PagesController::class, 'moon']);
Route::get('/wdlive', [PagesController::class, 'wdLive']);





Route::prefix('/graphs')->group(function () {
    Route::get('mtd', [PagesController::class, 'graphMtd']);
    Route::get('current', [PagesController::class, 'graphCurrent']);
    Route::get('last', [PagesController::class, 'graphLast']);
    Route::get('daily/{year}/{week}', [PagesController::class, 'graphDaily']);
});


Route::prefix('/records')->group(function() {
    Route::get('all', 'App\Http\Controllers\PagesController@recordsAll');
    Route::get('month', 'App\Http\Controllers\PagesController@recordsMonth');
    Route::get('year', 'App\Http\Controllers\PagesController@recordsYear');
    Route::get('2021', 'App\Http\Controllers\PagesController@records2021');
});


Route::prefix('/reports')->group(function() {
    //reports
    Route::get('dailylog', [ReportsController::class, 'reportsDailyLog']);
    Route::get('daily', [ReportsController::class, 'reportsDaily']);
    //Route::get('weatherdata', [ReportsController::class, 'reportsWeatherData']);

    Route::get('weatherdata', function () {
        return redirect('/wdisplay');
    });

    Route::get('aveext/{year}/{month}', [ReportsController::class, 'reportsAveExtremeMonth']);

    Route::prefix('climatedata')->group(function() {
        //reports/climatedata
        Route::get('currentyear', [ReportsController::class, 'reportsClimateCurrentYear']);
        Route::get('currentmonth', [ReportsController::class, 'reportsClimateCurrentMonth']);

        Route::prefix('history')->group(function() {
            //reports/climatedata/history
            Route::get('{year}', [ReportsController::class, 'reportsClimateYear']);
            Route::get('{year}/{month}', [ReportsController::class, 'reportsClimateMonth']);
        });
    });

    Route::prefix('noaa')->group(function() {
        //reports/noaa
        Route::get('currentyear', [ReportsController::class, 'reportsNoaaCurrentYear']);
        Route::get('currentmonth', [ReportsController::class, 'reportsNoaaCurrentMonth']);

        Route::prefix('history')->group(function() {
            //reports/noaa/history
            Route::get('{year}', [ReportsController::class, 'reportsNoaaYear']);
            Route::get('{year}/{month}', [ReportsController::class, 'reportsNoaaMonth']);
        });
    });
});
