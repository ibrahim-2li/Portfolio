<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',WelcomeController::class)->name('welcom');
//['skills' => Skill::all()]
Route::post('/contact', ContactController::class)->name('mail.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/skills',SkillController::class);
    //Route::get('/skills/{id}/',[SkillController::class ,'update'])->name('skillss.update');
   // Route::get('/skills/{id}/','SkillController@update')->name('skillss.update');
    Route::resource('/projects',ProjectController::class);
    //Route::post('/projects',[ProjectController::class ,'save'])->name('projects.save');

});



require __DIR__.'/auth.php';
