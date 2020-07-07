<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\navegacioncontroller;
use Illuminate\Support\Facades\Mail;



Route::get('home','navegacioncontroller@index');
Route::get('/','Homecontroller@getHome');
Route::get('apartamento1','navegacioncontroller@getApartamento1');
Route::get('apartamento2','navegacioncontroller@getApartamento2');
Route::get('entorno','navegacioncontroller@getEntorno');
Route::get('reservas','navegacioncontroller@getReservas');
Route::get('acceso','navegacioncontroller@getAcceso');
Route::get('faq','navegacioncontroller@getFaq');
Route::get('contacto','navegacioncontroller@getContacto');
Route::get('registro','navegacioncontroller@getRegistro');

Route::get('/faq/{id}/{nombre}', function ($id,$nombre) {
    return 'esto es el post numero '. $id . " creado por " . $nombre;
})->where('nombre','[a-zA-Z]+');


Route::post('message',function (){

    $data =  request()->all();

    Mail::send("emails.message",$data, function($message) use ($data){
        
        $message->from($data['email'],$data['name'])
        -> to('nachofvillar@gmail.com',$data['name'])
        ->subject($data['subject']);

    });
    //responder al usuario
return back()->with('flash', $data['name'] .', tu mensaje ha sido enviado');
    //return view('message',request()->all());
})->name('message');


/*
Route::get('home','Homecontroller@getHome');
Route::get('entorno', 'Entornocontroller@getEntorno');
Route::get('apartamento1','Apartamentoscontroller@getApartamento1');
Route::get('apartamento2','Apartamentoscontroller@getApartamento2');

Route::get('contacto', function () {
    return view('contacto');
});
Route::get('404', function () {
    return view('404');
});
Route::get('reservas', 'Reservarcontroller@getReservas');

Route::get('acceso', 'Reservarcontroller@getAcceso');

Route::get('faq', function () {
    return view ('faq');
});
*/



?>