<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegistration'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




Route::get('/shoes', function () {
    // Your code to retrieve shoes data here
    $shoes = [
        [
            'name' => 'Nike Air Max 90',
            'brand' => 'Nike',
            'price' => '$120',
            'details' => 'Nike Description'
        ],
        [
            'name' => 'Adidas Ultraboost',
            'brand' => 'Adidas',
            'price' => '$180',
            'details' => 'Adidas Description'
        ],
        [
            'name' => 'New Balance 990v5',
            'brand' => 'New Balance',
            'price' => '$175',
            'details' => 'New Balance Description'
        ],
    ];

    return response()->json($shoes);
});

