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

Route::get('/', function () {
    return view('coba');
});
Route::get('/add_articles', function () {
    return view('add_articles');
});
Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/display', function () {
    return view('display');
});

Route::get('/islamic', function () {
    return view('islamic');
});

Route::get('/health', function () {
    return view('health');
});

Route::get('/islamic_home', function () {
    return view('islamic_home');
});

Route::get('/health_home', function () {
    return view('health_home');
});

Route::get('/my_profile', function () {
    return view('my_profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{id_article}', 'HomeController@view')->name('view');


Route::get('/add_articles', 'ArticleController@index')->name('index');
Route::post('/add_articles', 'ArticleController@upload')->name('upload');
Route::delete('/add_articles/{id}', 'ArticleController@destroy')->name('destroy');
Route::get('/add_articles', 'ArticleController@show_image')->name('show_image');
Route::get('/add_articles', 'ArticleController@display')->name('display');
// Route::get('/add_articles', 'ArticleController@readURL')->name('readURL');

Route::get('/health', 'HealthController@index')->name('index');
Route::get('/islamic', 'IslamicController@index')->name('index');
// Route::get('/islamic', 'IslamicController@item_owl')->name('item_owl');
Route::get('/', 'MainController@index')->name('index');

Route::get('/health_home', 'HealthHomeController@index')->name('index');
Route::get('/islamic_home', 'IslamicHomeController@index')->name('index');
Route::get('/my_profile', 'MyProfileController@index')->name('index');
Route::get('/my_profile/{id_article}', 'MyProfileController@show')->name('show');
Route::get('/islamic/{id_article}', 'IslamicController@show')->name('show');
Route::get('/islamic_home/{id_article}', 'IslamicHomeController@show')->name('show');
Route::get('/health/{id_article}', 'HealthController@show')->name('show');
Route::get('/health_home/{id_article}', 'HealthHomeController@show')->name('show');
Route::get('/home/{id_article}', 'HomeController@show')->name('show');
Route::get('/{id_article}', 'MainController@show')->name('show');