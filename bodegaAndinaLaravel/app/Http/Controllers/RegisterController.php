<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      //Validación
      $request->validate([
        'name' => 'string'
        'surname' => 'string'
        'user' => 'required | unique:records,user'
        'country' => 'required'
        'email' => 'required | unique:records,email | email'
        'older' => 'required | boolean'
        'avatar' => 'file | ends_with:jpg,jpeg,png'
        'password' => 'required | min:5'
        'rePassword' => 'required | same:password'
      ], [
        'required' => 'El campo :attribute no puede quedar vacío'
        'unique' => 'El campo :attribute debe ser modificado'
        'min:5' => 'El campo :attribute debe tener al menos 5 caracteres'
        'same' => 'El campo :attribute no coincide con el primero ingresado'
        'ends_with' => 'El campo :attribute debe ser un archivo de imagen en formato jpg, jpeg o png'
        '' => 'El campo :attribute debe contener las letras DH en mayuscula'
      ])
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
