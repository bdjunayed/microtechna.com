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

Auth::routes();


Route::get('/', function () {
    return view('training');
});

Route::get('/aplicants-form', function () {
    return view('aplicants-form');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/web_design', function () {
    return view('web_design');
});
//Route::get('/mobile_app', function () {
//    return view('mobile_app');
//});
//Route::get('/performance_testing', function () {
//    return view('performance_testing');
//});

Route::get('/work', function () {
    return view('work');
});

Route::get('/bhasha-shoinik', function () {
    return view('bhasha-shoinik');
});

Route::get('/bhasha_shoinik_bangla_software', function () {
    return view('work_bhasha_shoinik');
});

Route::get('/system_netware_work', function () {
    return view('work_system_netware');
});

Route::get('/work_with_us', function (){
    return view('work_with_us');
});

Route::post('/work_with_us', 'ContactFormController@store');

Route::post('/newsletter', 'ContactFormController@storeNewsletter');

Route::get('training', function () {
    return view('training');
});
Route::get('trainings/php_for_beginners', function () {
    return view('trainings/php_for_beginners');
});
