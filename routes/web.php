<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StuffPaymentController;
use App\Http\Controllers\StuffTypeMngController;
use App\Http\Controllers\manageCustomerController;
use App\Http\Controllers\CustomerDeallingController;
use App\Http\Controllers\ProjectManagementController;
use App\Http\Controllers\CollectionManagementController;
use App\Http\Controllers\StuffManagementModelController;
use App\Http\Controllers\StuffAssignforProjectController;

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

Route::get('/',[adminController::class , 'dashboard'])->middleware('admin');

Route::group(['prefix' => 'authorized' ], function (){
    Route::get('/login-to-go', [adminController::class , 'index'])->name('login-to-go');
    Route::post('/admin-signin', [adminController::class , 'login'])->name('admin-signin');

    
    Route::middleware('admin')->group( function (){
        Route::get('/admin-dashboard', [adminController::class , 'dashboard'])->name('admin-dashboard');
        Route::get('/admin-logout', [adminController::class , 'adminLogout'])->name('admin-logout');
        Route::resource('stuffManagement', StuffManagementModelController::class);
        Route::resource('projectManagement', ProjectManagementController::class);
        Route::resource('customer',CustomerController::class);
        Route::resource('customerdealings',CustomerDeallingController::class);
        Route::resource('StuffAssignforProject',StuffAssignforProjectController::class);
        Route::resource('stuffPaymentMgmt' , StuffPaymentController::class);
        Route::resource('stuffType',StuffTypeMngController::class);
        Route::get('manage-customer' , [manageCustomerController::class, 'manageCustomer']);
        Route::get('manageEditable-customer/{id}' , [manageCustomerController::class, 'customerManageEdit']);
        Route::patch('managable-customer-update/{id}' , [manageCustomerController::class, 'customerUpdate']);
        Route::get('manageDelable-customer/{id}' , [manageCustomerController::class, 'destroy']);
        Route::resource('collectionManagement' , CollectionManagementController::class);
    
    
    });
});

/*========================= End Admin Authenticate Routs ==============================*/


// Route::middleware('admin')->group(['prefix' => 'admin' , 'as' => 'admin'], function (){

// });
