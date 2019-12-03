<?php

use App\Mail\ContactMessageCreated;

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

Route::get('/', [
    'as'=>'home',
    'uses'=>'PagesController@home'    
]);

Route::get('/about','PagesController@about')->name('about_path');

Route::get('/contact','ContactsController@create')->name('contact_path');
Route::post('/contact','ContactsController@store')->name('contact_path');

Route::get('/test',function(){

	return new ContactMessageCreated("said","sa.maach@gmail.com","this is awesom");
});