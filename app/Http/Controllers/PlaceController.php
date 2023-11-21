<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PlaceController extends Controller
{


    protected $place;
    public function __construct()
    {
        $this->place = new Place();
    }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $query = Place::query();

        // Búsqueda por nombre de área
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Obtener resultados paginados
        $items = $query->paginate($perPage)->appends($request->query());

        return Inertia::render('admin/places/index', [
            'items' => $items,
            'headers' => $this->place->headers,
            'filters' => [
                'tipo_estado' => $request->tipo_estado,
                'search' => $request->search,
            ],
            'perPageOptions' => [10, 25, 50, 100], // Opciones de cantidad de elementos por página
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Place::create($data);
        return redirect()->back()->with('success', 'Elemento creado exitosamente.');
    }

    public function update(Request $request, Place $place)
    {
        $data = $request->all();
        $place->update($data);
        return redirect()->back()->with('success', 'Elemento actualizado exitosamente.');
    }

    public function updateState($id)
    {
        $user = Place::find($id);
        $user->is_active = !$user->is_active;
        $user->save();
        return redirect()->back()->with('success', 'Elemento actualizado exitosamente.');
    }

    public function destroy(Place $place)
    {
        $place->delete();
        return redirect()->back()->with('success', 'Elemento eliminado exitosamente.');
    }
}
