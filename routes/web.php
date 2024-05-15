<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

Route::get('/', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/questions-list', [QuestionController::class, 'index1']);
Route::get('/option-list', [QuestionController::class, 'option']);
Route::post('/answer', [AnswerController::class, 'store']);
Route::get('/results', [AnswerController::class, 'results'])->name('result');


