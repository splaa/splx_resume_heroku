<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', static function () {
    return view('welcome');
});


Route::resource('/material-ui', 'Mui\MaterialUiController')->middleware('auth');

Route::get('/react', static function () {
    return view('react.one.index');
});

Route::get('/react/lesson/{lessonNumber}', static function ($lessonNumber) {
    return view('react.lessons.lesson')
        ->withLessonNumber($lessonNumber);
})->where('lessonNumber', '[0-9]+');


Route::get('/react/dz/{numberHomeWork}', static function ($numberHomeWork) {
    return view('react.home-work.'.$numberHomeWork);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/resume', 'Documents\ResumeController@index')->name('resume');
Route::get('/resume/pdf', 'Documents\ResumeController@generateResumePDF')
    ->name('resume.pdf');

Route::get('/phpinfo', function () {
    return phpinfo();
});
Route::get('/tests', function () {
    dd(is_id_term('id:1'));
});
