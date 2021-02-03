<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DailyQuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\PracticeController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\ExploreKategori;
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

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::get('logout', LogoutController::class)
        ->name('logout');

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    Route::get('/explore/{kategori}', ExploreKategori::class)->name('explore_kategori');

    Route::get('/practice', [PracticeController::class, 'index'])->name('practice');
    Route::get('/practice/{kategori}', [PracticeController::class, 'kategori'])->name('practice-kategori');
    Route::get('/practice_question/{id}', [PracticeController::class, 'question'])->name('practice-question');
    Route::post('/practice_answer/{id}', [PracticeController::class, 'answer'])->name('practice_answer');

    Route::get('/leaderboards/', [LeaderboardController::class, 'index'])->name('leaderboard');
    Route::get('/daily_quests/', [DailyQuestController::class, 'index'])->name('daily_quest');
    Route::get('/daily_quests/question/{id}', [DailyQuestController::class, 'question'])->name('daily_quest_question');
    Route::post('/daily_quests/answer/{id}', [DailyQuestController::class, 'answer'])->name('daily_quest_answer');
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});
