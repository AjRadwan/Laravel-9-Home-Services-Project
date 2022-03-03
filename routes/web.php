<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\ServiceDashboard;
use App\Http\Livewire\Admin\CustomerDashboards;  
 
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

 route::get('/', HomeComponent::class)->name('home');
 
//for customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/customer/dashboard', CustomerDashboard::class)->name('customer.dashboard');
  });

//for service Providers
Route::middleware(['auth:sanctum', 'verified', 'serviceprovider'])->group(function(){
    Route::get('/service/dashboard', ServiceDashboard::class)->name('service.dashboard');
  });

//for admin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
  Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});
