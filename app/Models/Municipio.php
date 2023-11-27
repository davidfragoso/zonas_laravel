<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table = 'municipios'; // Reemplaza con el nombre real de tu tabla

    protected $primaryKey = 'id_municipio'; // Especificar el nombre correcto de la clave primaria

    public function zonasArqueologicas()
    {
        return $this->hasMany(ZonaArqueologica::class, 'id_municipio');
    }
    
}
