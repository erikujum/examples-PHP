<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Index
    /**
     * Funcion que muestra la vista de logados o la vista con el formulario de login
     */
    public function index()
    {
        //Comprobamos si el usuario ya esta logado
        if (Auth::check()) {
            //Si esta logado le mostramos la vista de logados
            return view('logados');
        }
        //Si no esta logado le mostramos la vista con el formulario de login
        return view('login');
    }

    //Login
    /**
     * Funcion que se encarga de recibir los datos del formulario de login, comprobar que el usuario existe y en caso correcto lograr al usuario
     */
    public function login(Request $request)
    {
        //comprobamos que el email y el password han sido introducidos
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        //Almacenamos las credenciales de email y del password
        $credentials = $request->only('email', 'password');

        //Si el usuario existe lo logamos y lo llevamos a la vista de "logados" con un mensaje
        if (Auth::attempt($credentials)) {
            return redirect()->intended('logados')->withSuccess('Logado Correctamente');
        }

        //Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
        return redirect("/")->withSuccess('Los datos introducidos no son correctos');
    }

    //Logados
    /**
     * Funcion que muestra la vista de logados si el usuario esta logado y si no le devuelve al formulario de login con un mensaje de error
     */
    public function logados () {
        if (Auth::check()) {
            return view('logados');
        }
        return redirect("/")->withSuccess("No tienes acceso, por favor inicia sesion");
    }
}
