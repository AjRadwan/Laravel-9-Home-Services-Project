<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Servic\ServiceComponent;
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

 Route::get('/', HomeComponent::class)->name('home');
 
//for customer
Route::middleware(['auth:sanctum', 'verified'])
->group(function(){
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
  });

//for service Providers
Route::middleware(['auth:sanctum', 'verified', 'serviceprovider'])
->group(function(){
    Route::get('/service/dashboard', ServiceComponent::class)->name('service.dashboard');
  });

//for admin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])
->group(function(){
  Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
