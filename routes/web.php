<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;

use App\Http\Controllers\ProfileController;
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
//5 Controller is used instead of Route

Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);

Route::get('/Admin',[AdminController::class,'Admin']);
Route::get('/users',[AdminController::class,'user']);
Route::get('/deleteUser/{id}',[AdminController::class,'deleteUser']);

//Menu
Route::get('/foodMenu',[AdminController::class,'foodMenu']);
Route::get('/addMenu',[AdminController::class,'addMenu']);
Route::post('/uploadMenu',[AdminController::class,'upload']);
Route::get('/deleteMenu/{id}',[AdminController::class,'deleteMenu']);
Route::get('/updateTeamView/{id}',[AdminController::class,'updateTeamView']);
Route::post('/update/{id}',[AdminController::class,'update']);

//Team
Route::get('/teamView',[AdminController::class,'teamView']);
Route::get('/addTeam',[AdminController::class,'addTeam']);
Route::post('/uploadTeam',[AdminController::class,'uploadTeam']);
Route::get('/deleteTeam/{id}',[AdminController::class,'deleteTeam']);
Route::get('/updateView/{id}',[AdminController::class,'updateView']);
Route::post('/updateTeam/{id}',[AdminController::class,'updateTeam']);

//Message admin
Route::post('/message',[ContactController::class,'message']);
Route::post('/reservation',[AdminController::class,'reservation']);

//add to cart
Route::post('/addCart/{id}',[MenuController::class,'addCart']);
Route::get('/showCart/{id}',[MenuController::class,'showCart']);
Route::get('/deleteCart/{id}',[MenuController::class,'deleteCart']);

//search
Route::get('/searchMenu',[MenuController::class,'searchMenu']);
Route::get('/searchUser',[AdminController::class,'searchUser']);
Route::get('/searchMenuAdmin',[AdminController::class,'searchMenuAdmin']);

//Order
Route::post('/orderNow',[MenuController::class,'orderNow']);
Route::get('/orderView',[AdminController::class,'orderView']);



Route::get('/Menu',[MenuController::class,'index']);
Route::get('/Team',[TeamController::class,'team']);
Route::get('/Dishes',DishesController::class);
Route::get('/About',AboutController::class);
Route::get('/Contact',ContactController::class);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
