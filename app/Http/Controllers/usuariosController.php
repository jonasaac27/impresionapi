<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;


class usuariosController extends Controller
{
    public function showAll(){

        $usuario = usuarios::orderBy('division')->get();
        return response()->json($usuario,200);
    }


    public function validar($usuario,$pass){

        $ingreso = usuarios::where('usuario',$usuario)
                            ->where('contraseña',$pass)
                            ->get();

        if ($ingreso->count() === 1) {
            return $ingreso;
        }
        else{
            return 0;
        }

    }

}
