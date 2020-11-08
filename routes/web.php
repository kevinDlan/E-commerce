<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

Route::get('/', HomeComponent::class);

// Route::get('/shop', ShopComponent::class);

// Route::get('/checkout', CheckoutComponent::class);

// Route::get('/cart', CartComponent::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//For user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For admin
Route::middleware(['auth:sanctum', 'verified'])->group(function()
{
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});


