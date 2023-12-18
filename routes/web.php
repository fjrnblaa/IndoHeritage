<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Storage;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ReviewController::class, 'reviewHome']);

Route::get('/index', [SessionController::class, 'index']);
Route::get('/home', [SessionController::class, 'home']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::post('/login', [SessionController::class, 'login']);
Route::post('/register', [SessionController::class, 'register']);

Route::get('/review', [ReviewController::class, 'review']);
Route::get('/review/input', [ReviewController::class, 'input']);

Route::get('/cultures', [ContentController::class, 'index']);
Route::post('/cultures/store', [ContentController::class, 'store']);
Route::get('/cultures/{code}', [ContentController::class, 'readContent']);
Route::post('/cultures/update/{code}', [ContentController::class, 'updateContent']);

Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/purpose', function () {return view('purpose');});

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/dashboard/add', [AdminController::class, 'addContent']);
Route::get('/dashboard/update/{code}', [AdminController::class, 'updateContent']);
Route::get('/cultures/delete/{code}', [ContentController::class, 'deleteContent']);