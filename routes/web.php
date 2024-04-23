<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// // Route::get('/', function () {
// //     return view('welcome');
// // });
Route::get('/leyout', function () {
    return view('leyout');
});
Route::get('/ ', function () {
    return view('index');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/contuct', function () {
    return view('ContuctUs');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/medicalefq', function () {
    return view('medicalefq');
});
Route::get('/lab', function () {
    return view('lab');
});


// Route::get('/m', [ContactController::class, 'login']);
// Route::post('/addcontact', [ContactController::class, 'add']);
// Route::get('/delete/{id}', [ContactController::class, 'delete']);
// Route::get('/edit/{id}', [ContactController::class, 'edit']);
// Route::post('/edit/{id}', [ContactController::class, 'update']);


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
 
Route::get('/home', function () {
    return view('home');
})->name('home');
 
Route::get('/abouts', [UserController::class, 'about'])->name('about');
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('/login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
//Normal Users Routes List
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
 
//Admin Routes List
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');