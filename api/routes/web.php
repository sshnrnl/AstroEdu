<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;

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
    return view('Home.Home');
});

Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback', function () {
    $user = Socialite::driver('google')->user();
});

Route::get('auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('auth/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();
});

Route::get('/signup', [ProfileController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [ProfileController::class, 'signup']);

Route::get('/signin', [ProfileController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [ProfileController::class, 'signin']);
Route::post('/signout', [ProfileController::class, 'signout'])->name('signout');

// Rute untuk menampilkan halaman profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

// Rute untuk halaman edit profile
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // URL untuk halaman edit profil
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update'); // POST untuk update
});

// Route buat FAQ
Route::get('/faq/search', [FaqController::class, 'search'])->name('faq.search');

// Course
Route::get('/learn', [CourseController::class, 'index'])->name('courses.index');
Route::get('/learn/{id}', [CourseController::class, 'show'])->name('courses.show');

// Quiz
Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
// Route::get('/quiz/{quizId}', [QuizController::class, 'show'])->name('quiz.show');
// Route::post('/quiz/{quizId}/validate', [QuizController::class, 'validateAnswer'])->name('quiz.validate');

// Route::get('/quiz/{quizId}', [QuizController::class, 'showQuiz'])->name('quiz.show');
// Route::post('/quiz/{quizId}/submit', [QuizController::class, 'validateAnswer'])->name('quiz.submit');

Route::get('/quiz/{quizId}', [QuizController::class, 'showQuiz'])->name('quiz.show');
Route::post('/quiz/{quizId}/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');
Route::get('/quiz/{quizId}/result', [QuizController::class, 'showResult'])->name('quiz.result');


