<?php

//use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Вывод всех сообщений
Route::get('/contact/all', [App\Http\Controllers\ContactController::class, "allData"] )->name('contact-data');
//Данные формы контактов
Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, "submit"] )->name('contact-form');
//Страничка с выбранным сообщением
Route::get('/contact/all/{message_id}', [App\Http\Controllers\ContactController::class, "showOneMessage"] )->name('contact-data-one');
//Страница редактирования записи
Route::get('/contact/all/{message_id}/update', [App\Http\Controllers\ContactController::class, "updateMessage"] )->name('contact-update');
//Данные формы редактирования записи
Route::post('/contact/all/{message_id}/update', [App\Http\Controllers\ContactController::class, "updateMessageSubmit"] )->name('contact-update-submit');
//Удаления сообщения по ID
Route::get('/contact/all/{message_id}/delete', [App\Http\Controllers\ContactController::class, "deleteMessage"] )->name('contact-delete');



//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
