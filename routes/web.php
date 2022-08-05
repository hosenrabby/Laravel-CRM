<?php

use App\Http\Controllers\StuffManagementModelController;
use App\Http\Controllers\ProjectManagementController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDeallingController;
use App\Http\Controllers\StuffAssignforProjectController;
use App\Http\Controllers\StuffPaymentController;
use App\Http\Controllers\StuffTypeMngController;
use App\Http\Controllers\manageCustomerController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin' , 'as' => 'admin.'], function (){
    Route::get('/', function(){
        return view('admin.index');
    })->name('adminRoot');
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

});

