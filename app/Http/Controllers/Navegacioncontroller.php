<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navegacioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getApartamento1()
    {
        return view('apartamento1');
    }

    public function getApartamento2()
    {
        return view('apartamento2');
    }

    public function getEntorno()
    {

        return view('entorno');
    }
    public function getRegistro(){
        return view('registro');
    }

    public function getReservas()
    {

        return view('reservas');
    }

    public function getAcceso()
    {
        return view('acceso');
    }

    public function getFaq()
    {
        return view('faq');
    }
    public function getContacto(){

        return view('contacto');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
