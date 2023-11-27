<?php

namespace App\Http\Controllers;
use App\Models\Estado;

use App\Models\ZonaArqueologica;
use Illuminate\Http\Request;

class ZonaArqueologicaController extends Controller
{
    public function index(Request $request)
    {
        $zonasArqueologicas = ZonaArqueologica::when($request->estado_id, function ($query) use ($request) {
            // Asegúrate de que estás utilizando el nombre de la columna correcto aquí
            return $query->where('id_estado', $request->estado_id);
        })->get();
    
        $estados = Estado::all();
        return view('layout', compact('zonasArqueologicas', 'estados'));
    }
    
    
    public function cargarMasZonas(Request $request)
    {
        if ($request->ajax()) {
            $zonas = ZonaArqueologica::orderBy('nombre', 'asc')
                        ->paginate(6); // Ajusta la cantidad según tus necesidades
            return view('layout', compact('zonas'))->render();
        }
    }
    
    
}

