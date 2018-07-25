<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usuario;
class usuarioController extends Controller
{
  public function plo(Request $request){


//dd($request->all());
   $nombre = $request ['txt_nombre'];
    	$apellido = $request ['txt_apellido'];
    	$cedula = $request ['txt_cedula'];
    	$edad = $request ['txt_edad'];
    	$sexo = $request ['txt_sexo'];
    	$usuario = new usuario();
    	$usuario->nombre = $nombre;
    	$usuario->apellido = $apellido;
    	$usuario->cedula = $cedula;
    	$usuario->edad = $edad;
    	$usuario->sexo = $sexo;
    	$usuario->save();
    	return redirect()->back();
    }

public function index() {
    $usuarios = usuario::all();

    
     return view('welcome')->with('usuarios',$usuarios);
  }
    
}
