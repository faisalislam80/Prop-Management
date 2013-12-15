<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// get , post , put , delete
Route::get('/', function()
{
    return View::make('hello');
});

Route::controller('manager','Manager\ManagerController');

/**
 * Check manager login status before proceeding
 */
Route::group(array('before' => 'managerLogin'), function()
{
    Route::controller('dashboard','Manager\Dashboard\DashboardController');
    Route::controller('property','Property\Property\PropertyController');
    Route::controller('unit','Property\Unit\UnitController');
});
