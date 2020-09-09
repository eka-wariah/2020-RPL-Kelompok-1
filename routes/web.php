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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>['auth']],function(){




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'WelcomeController@index')->middleware('auth');

Route::group(['middleware'=>['CheckRole:1']],function(){
	

//admin
Route::get('/teachers', 'TeachersController@index')->middleware('auth');
Route::get('/teachers/{id}/delete', 'TeachersController@destroy')->middleware('auth');
Route::get('/teachers/create', 'TeachersController@create')->middleware('auth');
Route::post('/teachers/create', 'TeachersController@store')->middleware('auth');
Route::get('/students/{id}/delete', 'StudentsController@destroy')->middleware('auth');
Route::get('/ekstracurriculars', 'EkstracurricularsController@index')->middleware('auth');
Route::get('/ekstracurriculars/{id}/delete', 'EkstracurricularsController@destroy')->middleware('auth');
Route::get('/ekstracurriculars/create', 'EkstracurricularsController@create')->middleware('auth');
Route::post('/ekstracurriculars/create', 'EkstracurricularsController@store')->middleware('auth');
});


Route::group(['middleware'=>['CheckRole:3']],function(){
//student
Route::get('/choose/{id}/detail', 'EkstracurricularsController@show')->middleware('auth');
Route::get('/choose', 'ChooseController@index')->middleware('auth');
Route::post('/choose', 'ChooseController@store')->middleware('auth');
Route::get('/choose/{id}/eksracurricular', 'ChooseController@choose')->middleware('auth');
Route::get('/myekskul', 'MyekskulController@index')->middleware('auth');
});


//teacher and admin
Route::group(['middleware'=>['CheckRole:1,2']],function(){
Route::get('/students', 'StudentsController@index')->middleware('auth');
});


//all
Route::get('/ekstracurriculars/{id}/detail', 'EkstracurricularsController@show')->middleware('auth');
Route::get('/teachers/{id}/detail', 'TeachersController@show')->middleware('auth');
Route::get('/students/{id}/detail', 'StudentsController@show')->middleware('auth');
Route::get('/students/{id}/edit', 'StudentsController@create')->middleware('auth');
Route::post('/students/{id}/edit', 'StudentsController@update')->middleware('auth');
Route::get('/ekstracurriculars/{id}/out', 'ChooseController@out')->middleware('auth');
});