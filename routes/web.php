<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkLogin;

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

Route::get('/', function () { return view('login');})->name('login');
Route::get('/home',[MainController::class,'index'])->name('home');
Route::get('/register',[LoginController::class, 'index']);
Route::post('/store',[LoginController::class,'postLogin']);
Route::post('/register', [LoginController::class, 'store']);
Route::get('/admin/artist',[ArtistController::class,'index2']);
Route::get('/admin/actor',[ActorController::class,'index2']);
Route::get('/admin/request',[RequestController::class,'index']);
Route::resource('artists', ArtistController::class);
Route::resource('actors', ActorController::class);
Route::resource('users', UserController::class);
Route::resource('requests', RequestController::class);
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/artist', [ArtistController::class, 'index1'])->name('artistlist');
Route::get('/actor', [ActorController::class, 'index1'])->name('actorlist');
Route::get('/edit', [UserController::class, 'index'])->name('profile.edit');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::post('/send-email', [RequestController::class,'sendEmail'])->name('send-email');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/introduction', [MainController::class, 'introduction'])->name('introduction');