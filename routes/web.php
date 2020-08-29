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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'manager', 'middleware' => 'web'], function() {
    Route::get('manager', function(){
        return view('dashboard.layout');
    })->name('homepage.index');
    Route::resource('settings', 'SettingsController');
    Route::resource('banners', 'BannersController');
    Route::resource('academy_numbers', 'AcademyNumbersController');
    Route::resource('sections', 'SectionsController');
    Route::resource('media', 'AcademyMediaController');
    Route::post('add_new_building', 'AcademyMediaController@addNewBuilding')->name('add_new_building.submit');
    Route::post('add_new_graduation', 'AcademyMediaController@addNewGraduation')->name('add_new_graduation.submit');
    Route::post('add_new_conference', 'AcademyMediaController@addNewConference')->name('add_new_conference.submit');


    Route::resource('vision', 'VisionController');
    Route::resource('faq', 'FAQController');
    Route::resource('applicants', 'ApplicationsController');
    Route::resource('partners', 'PartnersController');
    Route::resource('branchs', 'BranchsController');
});