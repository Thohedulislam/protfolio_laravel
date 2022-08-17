<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\SkillController;
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
});

Route::get('/font',[FontendController::class,"fontend"] )->name('font');


Route::group(['middleware' => 'auth'], function () {

    // Route::get('/dashboard',[BackendController::class,"index"] )->name('dashboard');
    Route::get('/dashboard',[BackendController::class,"dashboard"] )->name('dashboard');
    //about details
    Route::prefix('about')->group(function (){

        Route::get('/about',[AboutController::class,"index"] )->name('about');
        Route::post('/about-store/{id}',[AboutController::class,"store"] )->name('about_store');
        Route::get('/about_list',[AboutController::class,"list"] )->name('about_list');

        Route::get('/destroy/{id}',[AboutController::class,"destroy"] )->name('about_destroy');


    });
    //skills
    Route::prefix('skills')->group(function (){

        Route::get('/skills',[SkillController::class,"index"] )->name('skills');
        Route::post('/skill-store/{id}',[SkillController::class,"store"] )->name('skill_store');
        Route::get('/skills_list',[SkillController::class,"list"])->name('Skills_list');

        Route::get('/destroy/{id}',[SkillController::class,"destroy"])->name('skills_destroy');



    });





});


require __DIR__.'/auth.php';
