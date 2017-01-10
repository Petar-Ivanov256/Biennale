<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
    ],
    function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', 'HomeController@home');
    Route::get('/about', 'StaticPagesController@about');
});


Route::get('/terms', 'StaticPagesController@terms');

//Route::get('/about','StaticPagesController@about');

Route::get('/vision', 'StaticPagesController@vision');
Route::get('/contact', 'StaticPagesController@contact');
Route::post('/contact/send-mail','StaticPagesController@send_contact_mail');
Route::get('/scholarships', 'StaticPagesController@scholarships');
Route::get('/bachelor', 'StaticPagesController@bachelor');
Route::get('/master', 'StaticPagesController@master');
Route::get('/phd', 'StaticPagesController@phd');
Route::get('/authors', 'StaticPagesController@authors');
Route::get('/partners', 'StaticPagesController@partners');

Route::get('/archive', 'ArchiveController@archive');

Route::get('/news', 'NewsController@news');
Route::get('/news/add', 'NewsController@add');
Route::post('/news/add', 'NewsController@create');
Route::get('/news/all', 'NewsController@getAll');
Route::get('/news/{id}', 'NewsController@getArticle');
Route::get('/news/edit/{id}', 'NewsController@edit');
Route::post('/news/edit/{id}', 'NewsController@update');
Route::delete('/news/{id}', 'NewsController@delete');

Route::get('/events', 'EventsController@show_events');

Route::get('/program', 'ProgramController@program');

Route::get('/apply-for-attendance', 'FormsController@applyForAttendanceForm');
Route::post('/apply', 'FormsController@sendForm');

Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@registerUser');

Route::get('/signin', 'AuthController@showLogin');
Route::post('/signin', 'AuthController@loginUser');

Route::get('/testauth', 'AuthController@test');

Route::get('/logout', 'AuthController@logout');

Route::get('/admin', 'Admin\AdminController@home_admin')->middleware('isAdmin');

Route::get('/admin/showEvents', 'Admin\AdminEventsController@show_events')->middleware('isAdmin');
Route::get('/admin/createEvent', 'Admin\AdminEventsController@create_event')->middleware('isAdmin');
Route::post('/admin/createEvent', 'Admin\AdminEventsController@add_event')->middleware('isAdmin');
Route::get('/admin/editEvent/{id}', 'Admin\AdminEventsController@edit_event')->middleware('isAdmin');
Route::post('/admin/editEvent', 'Admin\AdminEventsController@edit_event_save')->middleware('isAdmin');
Route::post('/admin/deleteEvent', 'Admin\AdminEventsController@delete_event')->middleware('isAdmin');

Route::get('/admin/authors/add', 'Admin\AdminAuthorsController@add')->middleware('isAdmin');
Route::post('/admin/authors/add', 'Admin\AdminAuthorsController@create')->middleware('isAdmin');
Route::get('/admin/authors/edit/{id}', 'Admin\AdminAuthorsController@edit')->middleware('isAdmin');
Route::post('/admin/authors/edit/{id}', 'Admin\AdminAuthorsController@update')->middleware('isAdmin');
Route::get('/authors/{id}', 'Admin\AdminAuthorsController@show');
Route::get('/admin/authors', 'Admin\AdminAuthorsController@all')->middleware('isAdmin');
Route::post('/admin/authors/delete/{id}', 'Admin\AdminAuthorsController@delete')->middleware('isAdmin');