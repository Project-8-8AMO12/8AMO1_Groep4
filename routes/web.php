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

Route::get('/', 'WelcomeController@index');

Route::get('/activiteiten', 'ActiviteitenController@index');

Route::get('/admin', function () {
    return view('admin');
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
Route::get('/nieuws', 'NieuwsController@index');
Route::post('Cursussen', 'ActiviteitenController@index');
Route::get('/Bijenstal','BijenstalController@index');

=======
>>>>>>> parent of 69937c1... Contact pagina Nick
=======
>>>>>>> parent of 69937c1... Contact pagina Nick
=======
>>>>>>> parent of 69937c1... Contact pagina Nick
