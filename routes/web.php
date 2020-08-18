<?php

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
    //return view('welcome');
    //return view('auth/login');
    return view('index');
});

//Route::get('customer', 'CustomerController@index');
//Route::get('/customer', 'CustomerController@index')->name('index');
Route::get('/customer', 'HomeController@index')->name('index');

Route::get('customer-list-xls', 'HomeController@exportToExcel')->name('customers.xls');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'CustomerController@index')->name('index');

Route::post('/', 'CustomersController@add')->name('customers.add');

Route::get('/cities', 'CustomersController@getCities2');

//Route::post('customers', ['as'=>'customers.store','uses'=>'CustomersController@customersPost']);
