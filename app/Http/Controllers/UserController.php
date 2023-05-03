<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function store(Request $request)
{
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->cuenta_administradora = Auth::id(); // El ID del usuario autenticado
    $user->save();
    return redirect()->route('users.index');
}


    public function __construct()
{
    $this->middleware('auth');
    $this->middleware(function ($request, $next) {
        if (!auth()->user()->esAdministrador()) {
            abort(403, 'No tienes autorización para acceder a esta página.');
        }
        return $next($request);
    });
}


}
