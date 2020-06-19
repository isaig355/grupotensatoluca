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
    return view('index');
});

Route::view('/index', 'index', ['name' => 'index']);
Route::view('/about-us', 'about-us', ['name' => 'about-us']);
Route::view('/contact', 'contact', ['name' => 'contactos']);
Route::view('/productos', 'productos', ['name' => 'productos']);
Route::view('/login', 'login', ['name' => 'login']);
Route::resource('avisos','avisosController');
Route::view('/page-login', 'page-login', ['name' => 'page-login']);
Route::view('/cotizaciones', 'cotizaciones');
// Este es para agendar las citas
Route::get('Citas','AgendaController@mostrar_agenda');
Route::post('Citas','AgendaController@guardar_agenda');
// Este es para agraegar tiempo para la cita
Route::get('Agenda','AgendaController@mostrar_tiempo');
Route::post('Agenda','AgendaController@guardar_tiempo');
// Este es para hacer un presupuesto


Route::get('/contacto','CorreoController@funcion2');

Route::POST('enviar','MailController@enviar_email')->name('enviar');


