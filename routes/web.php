<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FitnessClassesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ShowTrainersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('landing');
});*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/meet/our/team', [ShowTrainersController::class, 'index'])->name('showtrainers');
Route::get('/contact', function (){ 
    return view('front.contact'); 
})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //if user is admin
    Route::middleware('isAdmin')->group(function () {
        // Classes
        Route::get('/index/classes',[FitnessClassesController::class, 'index'])->name('index.classes');
        Route::get('/create/classes',[FitnessClassesController::class, 'create'])->name('create.classes'); 
        Route::post('/store/classes',[FitnessClassesController::class, 'store'])->name('store.classes'); 
        Route::get('/show/class/{id}',[FitnessClassesController::class, 'show'])->name('show.class'); 
        Route::get('/edit/class/{id}',[FitnessClassesController::class, 'edit'])->name('edit.class');  
        Route::put('/update/class/{id}',[FitnessClassesController::class, 'update'])->name('update.class');  
        Route::delete('/delete/class/{id}',[FitnessClassesController::class, 'delete'])->name('delete.class'); 
        
        //Users
        Route::get('/index/users', [UserController::class, 'index'])->name('index.users');
        Route::get('/create/users', [UserController::class, 'create'])->name('create.users');
        Route::post('/store/users', [UserController::class, 'store'])->name('store.users');
        Route::get('/show/user/{id}', [UserController::class, 'show'])->name('show.user');
        Route::get('/edit/user/{id}', [UserController::class, 'edit'])->name('edit.user');
        Route::put('/update/user/{id}', [UserController::class, 'update'])->name('update.user');
        Route::delete('/delete/user/{id}', [UserController::class, 'delete'])->name('delete.user');

        //Trainers
        Route::get('/index/trainers', [TrainerController::class, 'index'])->name('index.trainers');
        Route::get('/create/trainers', [TrainerController::class, 'create'])->name('create.trainers');
        Route::post('/store/trainers', [TrainerController::class, 'store'])->name('store.trainers');
        Route::get('/show/trainer/{id}', [TrainerController::class, 'show'])->name('show.trainer');
        Route::get('/edit/trainer/{id}', [TrainerController::class, 'edit'])->name('edit.trainer');
        Route::put('/update/trainer/{id}', [TrainerController::class, 'update'])->name('update.trainer');
        Route::delete('/delete/trainer/{id}', [TrainerController::class, 'delete'])->name('delete.trainer');

        //Dashboard
        Route::get('/dashboard/users', [DashboardController::class, 'showNumberUsers'])->name('showNumberUsers');
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

        Route::get('index/bookings', [BookingController::class, 'index'])->name('index.admin.booking');
        Route::get('create/admin/booking', [BookingController::class, 'createAdmin'])->name('create.admin.booking');
        Route::post('store/admin/booking', [BookingController::class, 'storeAdmin'])->name('store.admin.booking');
        Route::get('/search/users', [BookingController::class, 'searchUsers']);

        Route::get('/dash/data', [DashboardController::class, 'usersPerMonth']);
    });
    //Bookings
    Route::get('seemy/bookings', [BookingController::class, 'userBookings'])->name('index.booking');
    Route::get('create/booking', [BookingController::class, 'create'])->name('create.booking');
    Route::post('store/booking', [BookingController::class, 'store'])->name('store.booking');
    Route::delete('/cancel/booking/{id}', [BookingController::class, 'cancel'])->name('cancel.booking');

});

Route::get('/classes/all', [FitnessClassesController::class, 'getAllClasses']);



require __DIR__.'/auth.php';
