<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\empleado;
use App\licencia;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id,$division)
    {
        $empleados = empleado::where('run', $id)
                    ->where('division',$division)->get();

        return Response()->json($empleados,200);
    }

    public function showall($division)
    {
        $empleado = empleado::where('division', $division)->get();
        return Response()->json($empleado,200);
    }

    public function test(){
        $empleados_lic_mala = empleado::join('licencia','empleado.run','=','licencia.run')
                    ->where('num_licencia',0)->get();

        return response()->json($empleados_lic_mala,200);
    }
}
