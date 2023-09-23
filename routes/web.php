<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class,'index']);

Route::get('/dashboard', function () {
    return view('portfolio.Admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/case/study',[AdminController::class, 'caseStudy'])->name('casestudy');
    Route::post('/store/case/study',[AdminController::class, 'store'])->name('storecasestudy');
    Route::get('/delete/store/case/study/{id}',[AdminController::class, 'delete'])->name('deletestorecasestudy');

        
    Route::get('/project',[AdminController::class, 'project'])->name('project');
    Route::post('/store/project',[AdminController::class, 'storeProject'])->name('storeproject');
    Route::get('/delete/project/{id}',[AdminController::class, 'deleteProject'])->name('deleteproject');
});


Route::get('single/page/{id}',[MainController::class,'singleCasePage'])->name('single.case.page');
Route::get('single/project/{id}',[MainController::class,'singleProject'])->name('single.project.page');

require __DIR__.'/auth.php';
