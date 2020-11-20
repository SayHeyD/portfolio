<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

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
Route::get('/', [WelcomeController::class, 'view'])->name('index');
Route::get('/skills', [SkillsController::class, 'view'])->name('skills');
Route::get('/hobbies', [HobbyController::class, 'view'])->name('hobbies');
Route::get('/projects', [ProjectController::class, 'view'])->name('projects');
Route::get('/contact', [ContactController::class, 'view'])->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Routes where users have to be authenticated to access
});
