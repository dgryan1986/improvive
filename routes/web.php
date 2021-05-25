<?php

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

//Came with the application after the install

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'WelcomeController@about');

Route::get('/services', 'WelcomeController@services');

Route::get('/features', 'WelcomeController@features');

Route::get('/pricing', 'WelcomeController@pricing');


//**** Show the Tasks and Projects Pages ****//

// Show the Tasks Pages //
//GET tasks page
Route::resource('/tasks', 'TaskController');

// Show the Projects Pages //
//GET projects page
Route::resource('/projects', 'ProjectController');

// Show the Quotes Pages //
//GET quotes page
Route::resource('/quotes', 'QuoteController');

// Show the Work Order Pages //
//GET work orders page
Route::resource('/workorders', 'WorkOrderController');

// Show the Customer Pages //
//GET customer page
Route::resource('/customers', 'CustomerController');

// Show the Features Pages //
//GET teams page
Route::get('/team', function () {
    return view('team');
});

//GET inventory page
Route::resource('/inventory', 'AssetController');

//GET manage-team-member page
Route::get('/team-member', function () {
    return view('team-member');
});

//GET user-time page
Route::get('/time', function () {
    return view('time');
});


//Contact controller
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');


//Invoices controller
Route::get('invoices/create', 'InvoicesController@create')->middleware('auth');
Route::post('invoices', 'InvoicesController@store')->middleware('auth');

//Paymemts controller
Route::get('payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('payments', 'PaymentsController@store')->middleware('auth');

//Notifications
Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');