<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_estado'; // Si la clave primaria es diferente de 'id'

    public function zonasArqueologicas()
    {
        return $this->hasMany(ZonaArqueologica::class, 'id_estado');
    }
}
