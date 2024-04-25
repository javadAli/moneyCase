<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\MonthDaysController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookMonthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\DaysController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get("works/getWorkers/{work}",[WorkController::class,"getWorkers"])->middleware("auth")->name("works.getWorkers");
Route::resource("works",WorkController::class)->middleware("auth");
Route::resource("workers",WorkerController::class)->middleware("auth");
Route::resource("monthDays",MonthDaysController::class)->middleware("auth");
Route::resource("books",BookController::class)->middleware("auth");
Route::resource("bookMonths",BookMonthController::class)->middleware("auth");
Route::resource("dayComments",CommentsController::class)->middleware("auth");
Route::resource("workDays",DaysController::class)->middleware("auth");
Route::get('user/getWorks/{user}', [UserController::class, 'getWorks'])->middleware("auth")->name("user.getWorks");
require __DIR__.'/auth.php';
