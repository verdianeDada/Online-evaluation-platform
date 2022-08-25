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

Route::post('/contact', 'ContactController@mailContactForm');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', 'WelcomeController@index');


Route::prefix('api')->middleware(['auth'])->group(function() {
    
    //news
    Route::get('/all-news', 'NewStaffController@all_news');
    Route::post('/news', 'NewStaffController@store_news');
    Route::patch('/news/{id}', 'NewStaffController@update_news');
    Route::delete('/news/{id}', 'NewStaffController@delete_news');
    //staff
    Route::get('/all-staff', 'NewStaffController@all_staff');
    Route::post('/staff', 'NewStaffController@store_staff');
    Route::patch('/staff/{id}', 'NewStaffController@update_staff');
    Route::delete('/staff/{id}', 'NewStaffController@delete_staff');
    //forum
    Route::get('/all-post', 'forumController@all_post');
    Route::post('/post', 'forumController@store_post');
    Route::delete('/post/{id}', 'forumController@delete_post');

    //test paper
    Route::get('/teacherdashboard', 'TeacherDashboardController@index');
    Route::get('/set_update_testpaper/{id}', 'TeacherDashboardController@set_update_testpaper');
    Route::post('/testpaper', 'TeacherDashboardController@create_testpaper');
    Route::delete('/testpaper/{id}', 'TeacherDashboardController@delete_testpaper');
    Route::patch('/testpaper', 'TeacherDashboardController@update_testpaper');

    //student
    Route::get('/studentdashboard', 'StudentDashboardController@index');
    Route::get('/set_test', 'WriteTestController@set_test');
    Route::post('/submit_test', 'WriteTestController@submit_test');

    //  site management

    // courses
    Route::get('/all_course', 'SiteManagementController@all_course');
    Route::delete('/course/{id}', 'SiteManagementController@delete');
    Route::patch('/course', 'SiteManagementController@update');
    Route::post('/course', 'SiteManagementController@create');
    // carried courses
    Route::get('/carried', 'SiteManagementController@all_carried');
    Route::get('/all_courses', 'SiteManagementController@all_courses');
    Route::delete('/carried/{sid}/{cid}', 'SiteManagementController@delete_carried');
    Route::post('/carried', 'SiteManagementController@create_carried');
    // user
    Route::get('/load_users', 'UserController@load_users');
    Route::delete('/user/{id}', 'UserController@delete');
    Route::get('/user/block/{id}', 'UserController@block');
    Route::get('/user/put_admin/{id}', 'UserController@put_admin');
    Route::patch('/user', 'UserController@update');
});


Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/sitemanagement', 'SiteManagementController@index');
    Route::get('/newstaff', 'NewStaffController@index');
    Route::get('/write_test','writeTestController@index');
    Route::get('/results/{id}','TeacherDashboardController@testpaper_results');
    Route::get('/download_r/{id}', 'WriteTestController@download_r');

});

Auth::routes();


Route::any('{query}',function(){
    return view('pagenotfound');
})->where('query','.*');