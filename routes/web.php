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
    return view('auth.login');
})->name('login');

Auth::routes(['verify'=> true]);

// Route::group(['as'=>'user.', 'namespace'=>'User', 'middleware'=>['auth','role:native']],function(){
// 	Route::get('/user', 'UserController@index');

// });

Route::group(['as' => 'oim.','prefix'=> 'oim', 'namespace' => 'Administration', 'middleware' => ['auth','verified']], function()
{
	Route::resource('student', 'StudentController');
	Route::get('student/about','StudentController@about')->name('student.about');
	Route::resource('faculty', 'FacultyController');
	Route::get('faculty/about','FacultyController@about')->name('faculty.about');
	Route::resource('course', 'CourseController');
	Route::get('course/about', 'CourseController@about')->name('course.about');
	Route::resource('offered-course', 'OfferedCoursesController');
	Route::resource('batch', 'BatchController');
	Route::resource('user', 'UserController');
	Route::resource('permission', 'PermissionController');
	Route::resource('notice', 'OIMNoticesController');

	
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('role:student');
Route::get('/oim/dashboard', 'DashboardController@index')->name('dashboard')->middleware('role:faculty, admin');




Route::get('/import', 'ImportController@getImport')->name('import');
Route::post('/import_parse', 'ImportController@importCsv')->name('import_parse');
Route::post('/import_process', 'ImportController@processImport')->name('import_process');
/*Route::namespace('Administration')->prefix('admin')->name('admin.')->middleware('can:admin-nav')->group(function(){
	Route::resource('/user', 'UserController',['except' => ['show', 'create','store']]);
});
*/
Route::get('mail','NoticeController@notice')->name('notice');

