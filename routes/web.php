<?php

use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\MarkListController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TermController;
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
    return view('welcome');
})->name('home');

Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('terms', TermController::class);
Route::resource('examinations', ExaminationController::class);
Route::controller(MarkListController::class)->name('marklist.')->prefix('marklist')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{student}/edit', 'edit')->name('edit');
    Route::put('{student}', 'update')->name('update');
    Route::delete('{student}/{term}', 'destroy')->name('destroy');
});
