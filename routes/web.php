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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/mapa', 'PollutantController@mapa')->name('routeName');
Route::get('/mapa/{pid}', 'PollutantController@showPollutant');

Route::get('/test', function () {
    return view('test');
});

Route::middleware(['auth'])->group(function () {
    
	Route::get('/datos', 'TypeController@verInterfazAdministrativa');

	Route::post('/agregar-tipo', 'TypeController@addType')->name('agregar-tipo');

	Route::post('/eliminar-tipo', 'TypeController@deleteType')->name('eliminar-tipo');

	Route::post('/editar-tipo', 'TypeController@editType')->name('editar-tipo');

	Route::post('/add-pollutant', 'PollutantController@addPollutant')->name('add-pollutant');

	Route::post('/delete-pollutant', 'PollutantController@deletePollutant')->name('delete-pollutant');

	Route::post('/edit-pollutant', 'PollutantController@editPollutant')->name('edit-pollutant');

	Route::post('/retrieve-pollutant', 'PollutantController@retrievePollutant');

	Route::post('/changeHomeContent', 'HomeController@changePageContent')->name('changeHomeContent');

	Route::get('/adm', 'HomeController@loadAdminPage')->middleware('RootAdmin');
});


