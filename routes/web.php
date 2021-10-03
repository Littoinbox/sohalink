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
    return view('main', array('title' => 'SakhaLink - молодёжная платформа Сахалинской области'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event/1', function () {
    return view('event1', array('title' => 'SakhaLink - День молодежи России'));
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get("/admin", [App\Http\Controllers\Admin\AdminControllers::class, "index"])->name('AdminMain');
    Route::get('/admin/quize', [\App\Http\Controllers\Admin\QuizeController::class, "index"])->name('AdminQuize');
    Route::get('/admin/addquize', [\App\Http\Controllers\Admin\QuizeController::class, "addQuize"])->name('addQuize');
    Route::post('/admin/addquize', [\App\Http\Controllers\Admin\QuizeController::class, "addQuizePost"]);

    Route::get('/admin/addquize/question/{id}', [\App\Http\Controllers\Admin\QuizeController::class, "addQuizeQuestion"])->name('addQuizeQuestion');
    Route::post('/admin/addquize/question/{id}', [\App\Http\Controllers\Admin\QuizeController::class, "addQuizeQuestionPost"]);

    Route::get('/admin/projectCalendar', [\App\Http\Controllers\Admin\ProjectCalendarsControllers::class, "index"])->name('AdminCalendar');
    Route::get('/admin/addProjeckt', [\App\Http\Controllers\Admin\ProjectCalendarsControllers::class, "addProjeckt"])->name('addProjeckt');
    Route::post('/admin/addProjeckt', [\App\Http\Controllers\Admin\ProjectCalendarsControllers::class, "addProjecktPost"]);
});

Route::get('/childpage', function () {
    return view('childpage', array('title' => 'SakhaLink - Детская страничка'));
})->name('childpage');


Route::get("/quize/test", [\App\Http\Controllers\QuizeController::class, 'test']);
Route::get("/quize/{id}", [\App\Http\Controllers\QuizeController::class, 'mainQuize']);
Route::post("/quize/{id}", [\App\Http\Controllers\QuizeController::class, 'mainQuizeAjax']);
Route::get("/about", function () {
    return view('about', array('title' => 'SakhaLink - О проекте',
                               'mainId'=>'about'));
})->name('about');

Route::get("/podcast/", function(){
    return view('podkast', array('title' => 'SakhaLink - Подкасты',
                                'mainId'=>'podcast',
                                'logoSrc'=>"/images/big-logo.png"));
})->name('podcast');

Route::get("/schoolBlog/", function(){
    return view('schoolBlog', array('title' => 'SakhaLink - Школа блогеров',
        'mainId'=>'podcast',
        'logoSrc'=>"/images/big-logo.png"));
})->name('schoolBlog');

Route::get("/day/", function(){
    return view('day', array('title' => 'SakhaLink - Дни',
        'mainId'=>'podcast',
        'logoSrc'=>"/images/big-logo.png"));
})->name('day');

Route::get("/work", function(){
    return view('work', array('title' => 'SakhaLink - Отчетные работы',
        'mainId'=>'podcast',
        'logoSrc'=>"/images/big-logo.png"));
})->name('work');
Route::get("/sahounb", function(){
    return view('sahounb', array('title' => 'SakhaLink - СахОУНБ',
        'mainId'=>'podcast',
        'logoSrc'=>"/images/big-logo.png"));
})->name('sahounb');
Route::get("/kraeved", function(){
    return view('kraeved', array('title' => 'SakhaLink - Краеведы ОТВ',
        'mainId'=>'podcast',
        'logoSrc'=>"/images/big-logo.png"));
})->name('kraeved');

//СахОУНБ
