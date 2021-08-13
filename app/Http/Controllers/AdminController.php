<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        $usuarios = User::paginate(10);
        return view('admin.users', compact('usuarios'));
    }

    public function store(FormCreateUserRequest $request){
        
        $usuario = User::create([
            'name' => $request['nombre'],
            'identificacion' => $request['identificacion'],
            'email' => $request['correo'],
            'password' => Hash::make($request['password']),
            'estado' => $request['estado']
        ]);
        if($usuario->save()){
            return redirect()->back()->with(['create' => 1, 'mensaje'=> 'Usuario creado correctamente!']);
        }else{
            return redirect()->back()->with(['create' => 0, 'mensaje'=> 'Usuario no se creó correctamente!']);
        }
        
    }
}
