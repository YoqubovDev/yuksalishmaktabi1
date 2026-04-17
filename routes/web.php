<?php

use App\Http\Controllers\AboutStaticController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotocardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\AchievementController;


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/about', [SliderController::class, 'index'])->name('about');
Route::get('/teachers', [TeacherController::class,'index'])->name('teachers');
Route::get('/', [HomeSliderController::class,'index'])->name('home');
Route::get('/dars', [GroupController::class, 'index'])->name('subject');
// Route::get('/photo', [VideoController::class, 'index'])->name('photo');
// Route::get('/yutuqlar', [PhotocardController::class, 'index'])->name('achievements');
Route::get('/achievements', [PhotocardController::class,'index'])->name('achievements');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/aloqa', [ContactController::class, 'index'])->name('contact');
Route::get('/lang/{locale}', function ($locale, Request $request) {
    if (in_array($locale, ['uz', 'ru'])) {
        session(['_lang' => $locale]);
        session()->save();
    }
    
    if ($request->ajax() || $request->wantsJson()) {
        return response()->json(['status' => 'success']);
    }

    return redirect($request->headers->get('referer', route('home')));
})->name('lang.switch');

//Route::get('/statistics', [AboutStaticController::class, 'index']);






