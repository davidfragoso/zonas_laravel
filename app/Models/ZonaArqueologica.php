<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonaArqueologica extends Model
{
    use HasFactory;

    protected $table = 'zonas_arqueologicas';

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'id_contacto');
    }
}
