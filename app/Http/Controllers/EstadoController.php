<?php

namespace App\Http\Controllers;
use App\Models\ZonaArqueologica;

use Illuminate\Http\Request;

class EstadoController extends Controller
{
    protected $table = 'estados'; // El nombre real de tu tabla

    public function zonasArqueologicas()
{
    return $this->hasMany(ZonaArqueologica::class, 'estado_id');
}

}
