<?php

Auth::routes();


Route::get('/', 'Frontend_controller@index')->name('Frontend');
Route::resource('alumnis','client\AlumniProfileController');
Route::resource('/news_updates', 'client\NewsController');
//Route::get('/upcoming_events', 'Frontend_controller@upcoming_events');
Route::get('/image_gallery', 'Frontend_controller@gallery');
Route::get('/contact_us', 'Frontend_controller@contact_us');


Route::resource('/register','AlumniController');




Route::get('/admin', 'HomeController@index')->name('home');


Route::get('students/getDataTable','AlumniController@getDataTable');
Route::resource('students', 'AlumniController');




Route::get('logout','Auth\LoginController@logout');
// Admin Auth Routes
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
// Password reset routes
Route::post('admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

/* For Admin Alumni */
Route::get('faculties/getDataTable','HallController@getDataTable');
Route::resource('faculties', 'HallController');

/* For Admin Alumni */
Route::get('news/getDataTable','NewsController@getDataTable');
Route::resource('news', 'NewsController');


Route::get('event/frontend','EventController@frontend_view');
Route::get('event/getDataTable','EventController@getDataTable');
Route::resource('event', 'EventController');


Route::get('testimonials/getDataTable','TestimonialController@getDataTable');
Route::resource('testimonials', 'TestimonialController');


/*Route::get('photos/getDataTable','MediaController@getDataTable');
Route::resource('photos', 'MediaController');*/


Route::group(['middleware'=>'auth:admin'], function() {
    // Admin Alumni


});
