<?php

use Illuminate\Support\Facades\Mail;

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
 * home routes
 */

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/rp', 'HomeController@recruitment');
Route::post('/rp', 'HomeController@recruitment');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/curr_demand', 'HomeController@curr_demand');

Route::get('/online', 'HomeController@online');
Route::post('/online_submit', 'HomeController@online_submit');


Route::get('/{dwn}/download','HomeController@download');

Route::get('send','MailController@send');
//Route::get('add_carousel', 'home_controller@add_carousel');
//Route::get('/{pasainternational}/edit_carousel', 'home_controller@edit_carousel');
//Route::get('/{pasainternational}/delete_carousel', 'home_controller@delete_carousel');


/*
 * auth routes
 */

Auth::routes();
Route::get('/pasa_admin/home','AdminController@index');
Route::get('/pasa_admin','pasa_admin\LoginController@showLoginForm')->name('pasa_admin.login');
Route::post('/pasa_admin','pasa_admin\LoginController@login');
Route::post('/pasa_admin-password/email','pasa_admin\ForgotPasswordController@sendResetLinkEmail')->name('pasa_admin.password.email');
Route::get('/pasa_admin-password/reset', 'pasa_admin\ForgotPasswordController@showLinkRequestForm')->name('pasa_admin.password.request');
Route::post('/pasa_admin-password/reset','pasa_admin\ResetPasswordController@reset');
Route::get('/pasa_admin-password/reset/{token}','pasa_admin\ResetPasswordController@showResetForm')->name('pasa_admin.password.reset');

//admin view control
Route::get('/pasa_admin/carousel','AdminController@carousel');
Route::get('/pasa_admin/current_demand','AdminController@current_demand');
Route::get('/pasa_admin/current_demand_img','AdminController@current_demand_img');
Route::get('/pasa_admin/about','AdminController@about');
Route::get('/pasa_admin/recruitment_procedure','AdminController@recruitment_procedure');
Route::get('/pasa_admin/contact','AdminController@contact');
Route::get('/pasa_admin/gallery','AdminController@gallery');
Route::get('/pasa_admin/overseas_client','AdminController@overseas_client');
Route::get('/pasa_admin/achiever','AdminController@achiever');
Route::get('/pasa_admin/corporate_field','AdminController@corporate_field');
Route::get('/pasa_admin/corporate_member','AdminController@corporate_member');

//admin background process
Route::post('/pasa_admin/add_carousel','AdminController@add_carousel');
Route::post('/pasa_admin/update_carousel','AdminController@update_carousel');
Route::post('/pasa_admin/delete_carousel','AdminController@delete_carousel');

Route::post('/pasa_admin/add_current_demand','AdminController@add_current_demand');
Route::post('/pasa_admin/update_current_demand','AdminController@update_current_demand');
Route::post('/pasa_admin/delete_current_demand','AdminController@delete_current_demand');

Route::post('/pasa_admin/add_current_demand_img','AdminController@add_current_demand_img');
Route::post('/pasa_admin/update_current_demand_img','AdminController@update_current_demand_img');
Route::post('/pasa_admin/delete_current_demand_img','AdminController@delete_current_demand_img');

Route::post('/pasa_admin/add_about','AdminController@add_about');
Route::post('/pasa_admin/update_about','AdminController@update_about');
Route::post('/pasa_admin/delete_about','AdminController@delete_about');

Route::post('/pasa_admin/add_recruitment_procedure','AdminController@add_recruitment_procedure');
Route::post('/pasa_admin/update_recruitment_procedure','AdminController@update_recruitment_procedure');
Route::post('/pasa_admin/delete_recruitment_procedure','AdminController@delete_recruitment_procedure');

Route::post('/pasa_admin/add_contact','AdminController@add_contact');
Route::post('/pasa_admin/update_contact','AdminController@update_contact');
Route::post('/pasa_admin/delete_contact','AdminController@delete_contact');

Route::post('/pasa_admin/add_gallery','AdminController@add_gallery');
Route::post('/pasa_admin/update_gallery','AdminController@update_gallery');
Route::post('/pasa_admin/delete_gallery','AdminController@delete_gallery');

Route::post('/pasa_admin/add_overseas_client','AdminController@add_overseas_client');
Route::post('/pasa_admin/update_overseas_client','AdminController@update_overseas_client');
Route::post('/pasa_admin/delete_overseas_client','AdminController@delete_overseas_client');

Route::post('/pasa_admin/add_achiever','AdminController@add_achiever');
Route::post('/pasa_admin/update_achiever','AdminController@update_achiever');
Route::post('/pasa_admin/delete_achiever','AdminController@delete_achiever');

Route::post('/pasa_admin/add_corporate_field','AdminController@add_corporate_field');
Route::post('/pasa_admin/update_corporate_field','AdminController@update_corporate_field');
Route::post('/pasa_admin/delete_corporate_field','AdminController@delete_corporate_field');

Route::post('/pasa_admin/add_corporate_member','AdminController@add_corporate_member');
Route::post('/pasa_admin/update_corporate_member','AdminController@update_corporate_member');
Route::post('/pasa_admin/delete_corporate_member','AdminController@delete_corporate_member');

