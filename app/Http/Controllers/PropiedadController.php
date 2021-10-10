<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropiedadStoreRequest;
use App\Http\Resources\PropiedadResource;
use App\Models\Propiedad;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $propiedades = Propiedad::withCount('solicitudes')->with('vendedor')->filters($request)->latest()->paginate(10);
        $propiedadesRaw = PropiedadResource::collection($propiedades);
        $propiedades = $propiedadesRaw->resolve();
        
        return view('dashboard', compact('propiedades', 'propiedadesRaw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendedores = Vendedor::toBase()->get()->pluck('id', 'nombre');
        return view('propiedades.create', compact('vendedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropiedadStoreRequest $request)
    {
        if (Propiedad::create($request->validated())) {
            return redirect('/dashboard')->with('status', __('Propiedad Creada Exitosamente!'));
        } else {
            return redirect()->back()->withErrors('Error al guardar')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show($propiedad)
    {
        return new PropiedadResource(Propiedad::findOrFail($propiedad));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit($propiedad)
    {
        $propiedad = Propiedad::findOrFail($propiedad);
        $vendedores = Vendedor::toBase()->get()->pluck('id', 'nombre');
        return view('propiedades.edit', compact('propiedad', 'vendedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(PropiedadStoreRequest $request, $propiedad)
    {
        $propiedad = Propiedad::findOrFail($propiedad);
        if ($propiedad->update($request->validated())) {
            return redirect('/dashboard')->with('status', __('Propiedad Editada Exitosamente!'));
        } else {
            return redirect()->back()->withErrors('Error al guardar')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($propiedad)
    {
        Propiedad::findOrFail($propiedad);
        if (Propiedad::destroy($propiedad)) {
            return redirect('/dashboard')->with('status', __('Propiedad Eliminada Exitosamente!'));
        } else {
            return redirect()->back()->withErrors('Error al guardar')->withInput();
        }
    }
}
