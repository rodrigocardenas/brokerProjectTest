<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Propiedad extends Model
{
    public $table = 'propiedades';
    protected $appends = ['fecha_publicacion'];
    protected $guarded = [];
    const ESTADOS = ['En Venta', 'Reservada', 'Vendida'];
    use HasFactory;
    use SoftDeletes;

    public function vendedor()
    {
        return $this->belongsTo(vendedor::class, 'id_vendedor');
    }

    public function solicitudes()
    {
        return $this->hasMany(SolicitudVisita::class, 'id_propiedad');
    }

    // mutators - attributes - scopes

	public function getFechaPublicacionAttribute()
	{
		return $this->created_at != null ? Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y H:i') : '---';
	}

    public function scopeFilters($query, Request $request)
    {
        return $query
        ->when($request->has('search') , function ($query) use ($request)
        {
            $query->where('nombre', 'like', "%$request->search%");
            $query->orWhere('direccion', 'like', "%$request->search%");
            $query->orWhereHas('vendedor', function($query) use ($request) {
                $query->where('nombre', 'like', "%$request->search%");
            });
        });
    }
}
