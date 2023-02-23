<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(FeedbackController::class)->group(function () {
    Route::get('get-questions', 'getQuestions')->name('feedback.questions');
    Route::post('send-feedback', 'saveFeedback')->name('feedback.save');
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
