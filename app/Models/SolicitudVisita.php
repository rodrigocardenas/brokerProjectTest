<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolicitudVisita extends Model
{
    public $table = 'solicitud_visitas';
    const ESTADOS = ['Pendiente', 'Aprobada', 'Terminada', 'Cancelada'];
    use HasFactory;
    use SoftDeletes;
}
