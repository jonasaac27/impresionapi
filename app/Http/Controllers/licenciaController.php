<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\licencia;

class licenciaController extends Controller
{

    public function showAll($division){
        $licencias = licencia::where('division',$division)
                        ->orderBy('fecha_inicio_licencia','desc')
                        ->get();

        return response()->json($licencias,200);
    }



}
