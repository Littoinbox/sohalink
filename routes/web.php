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
    Route::get('/admin/projectCalendar', [\App\Http\Controllers\Admin\ProjectCalendarsControllers::class, "index"])->name('AdminCalendar');
    Route::get('/admin/addProjeckt', [\App\Http\Controllers\Admin\ProjectCalendarsControllers::class, "addProjeckt"])->name('addProjeckt');
    Route::post('/admin/addProjeckt', [\App\Http\Controllers\Admin\ProjectCalendarsControllers::class, "addProjecktPost"]);
});

Route::get('/childpage', function () {
    return view('childpage', array('title' => 'SakhaLink - Детская страничка'));
})->name('childpage');
