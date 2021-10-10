<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropiedadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'propietario' => $this->vendedor->nombre ?? '',
            'estado' => $this->estado,
            'numero_solicitudes' => $this->solicitudes_count,
            'fecha_publicacion' => $this->fecha_publicacion,
        ];
    }
}
