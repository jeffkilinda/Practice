<?php

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


/*
//inserting dynamic parameter in the url

Route::get('/about/{name}/{id}', function ($name, $id ) {
    return 'This is user ' .$name. ' of Id ' .$id;
});



*/

use App\Http\Controllers\PagesController;

Route::get('/', 'TipsController@index');

Route::get('/top', 'TipsController@topTips');

Route::get('/epl', 'TipsController@epl');

Route::get('/serieA', 'TipsController@serieA');

Route::get('/bundesliga', 'TipsController@bundesliga');

Route::get('/eredivisie', 'TipsController@eredivisie');

Route::get('/laliga', 'TipsController@laliga');

Route::get('/yesterday', 'TipsController@yesterday');

Route::get('/adminindex', 'TipsController@adminindex');

Route::get('/about', 'PagesController@about');

Route::get('/terms-of-use', 'PagesController@termsofuse');

Route::get('/services', 'PagesController@services');

Route::get('/privacy-policy', 'PagesController@privacy');

Route::get('/disclaimer', 'PagesController@disclaimer');

Route::get('/faqs', 'PagesController@faqs');

Route::resource('messages','PostsController');

Route::resource('tips', 'TipsController');

Auth::routes();    

Route::get('/home', 'HomeController@index')->name('home');


