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
//Rutas Publicas
Route::get('/', function () {
    return view('auth.login');
});

//IMPORTACIONES
Route::get('import', 'ImportController@import');

//Ruta de respuesta por SMS
Route::resource('replay', 'ReplayController', ['only' => ['store']]);
//Rutas protegidas por autentificacion
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {
    //Ruta de la prueba test de Twilio
    //Route::resource('sms', 'SmsController');
    //Rutas de los roles
    Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');
    Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.store');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.update');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');
    //Rutas de los users
    Route::get('users', 'UserController@index')->name('users.index')->middleware('permission:users.index');
    Route::get('users/create', 'UserController@create')->name('users.create')->middleware('permission:users.create');
    Route::post('users/store', 'UserController@store')->name('users.store')->middleware('permission:users.store');
    Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('permission:users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('permission:users.update');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');
    //Rutas de los sms
    Route::get('sms', 'SendedController@index')->name('sms.index')->middleware('permission:sms.index');
    Route::get('sms/create', 'SendedController@create')->name('sms.create')->middleware('permission:sms.create');
    Route::post('sms/store', 'SendedController@store')->name('sms.store')->middleware('permission:sms.store');
    Route::post('sms/search', 'SendedController@search')->name('sms.search')->middleware('permission:sms.show');
    Route::get('sms/{sms}', 'SendedController@show')->name('sms.show')->middleware('permission:sms.show');
    Route::get('sms/{sms}/edit', 'SendedController@edit')->name('sms.edit')->middleware('permission:sms.edit');
    Route::put('sms/{sms}', 'SendedController@update')->name('sms.update')->middleware('permission:sms.update');
    Route::delete('sms/{sms}', 'SendedController@destroy')->name('sms.destroy')->middleware('permission:sms.destroy'); 

    //Rutas de los addresses
    Route::get('addresses', 'AddressController@index')->name('addresses.index')->middleware('permission:addresses.index');
    Route::get('addresses/create', 'AddressController@create')->name('addresses.create')->middleware('permission:addresses.create');
    Route::post('addresses/store', 'AddressController@store')->name('addresses.store')->middleware('permission:addresses.store');
    Route::get('addresses/{address}', 'AddressController@show')->name('addresses.show')->middleware('permission:addresses.show');
    Route::get('addresses/{address}/edit', 'AddressController@edit')->name('addresses.edit')->middleware('permission:addresses.edit');
    Route::put('addresses/{address}', 'AddressController@update')->name('addresses.update')->middleware('permission:addresses.update');
    Route::delete('addresses/{address}', 'AddressController@destroy')->name('addresses.destroy')->middleware('permission:addresses.destroy'); 

    //Rutas de las persons
    Route::get('persons', 'PersonController@index')->name('persons.index')->middleware('permission:persons.index');
    Route::get('persons/create', 'PersonController@create')->name('persons.create')->middleware('permission:persons.create');
    Route::post('persons/store', 'PersonController@store')->name('persons.store')->middleware('permission:persons.store');
    Route::get('persons/{person}', 'PersonController@show')->name('persons.show')->middleware('permission:persons.show');
    Route::get('persons/{person}/edit', 'PersonController@edit')->name('persons.edit')->middleware('permission:persons.edit');
    Route::put('persons/{person}', 'PersonController@update')->name('persons.update')->middleware('permission:persons.update');
    Route::delete('persons/{person}', 'PersonController@destroy')->name('persons.destroy')->middleware('permission:persons.destroy'); 
    
    //Rutas de las properties
    Route::get('properties', 'PropertyController@index')->name('properties.index')->middleware('permission:properties.index');
    Route::get('properties/create', 'PropertyController@create')->name('properties.create')->middleware('permission:properties.create');
    Route::post('properties/store', 'PropertyController@store')->name('properties.store')->middleware('permission:properties.store');
    Route::get('properties/{property}', 'PropertyController@show')->name('properties.show')->middleware('permission:properties.show');
    Route::get('properties/{property}/edit', 'PropertyController@edit')->name('properties.edit')->middleware('permission:properties.edit');
    Route::put('properties/{property}', 'PropertyController@update')->name('properties.update')->middleware('permission:properties.update');
    Route::delete('properties/{property}', 'PropertyController@destroy')->name('properties.destroy')->middleware('permission:properties.destroy');

    Route::get('templates', 'TemplateController@index')->name('templates.index')->middleware('permission:templates.index');
});




