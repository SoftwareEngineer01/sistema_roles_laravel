<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Método que se activa cuando le damos guardar al formulario
        //Aqui guardamos el usuario que se va a crear

        $user = User::create($request->all());

        return redirect()->route('users.index', $user->id)
            ->with('info', 'Usuario guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();//Obtiene todos los roles creados

        //Busca el producto con el id que le pasamos $user y $roles
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        //Actualizar usuario
        $user->update($request->all());

        //Actualizar roles - un usuario puede tener muchos roles sync()sincronizacion y le pasamos
        //todo lo que tenemos en el array roles
        /*Este usuario tiene algunos roles, sincronizalo con lo que estamos pasando atraves del array lista de roles*/
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
        ->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
