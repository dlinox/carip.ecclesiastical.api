<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Place;
use App\Models\Ubigeo;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $query = User::query();

        // Búsqueda por nombre de área
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('fullname', 'like', '%' . $searchTerm . '%');
        }

        // Obtener resultados paginados
        $items = $query->select(
            'users.id',
            'users.fullname',
            'users.email',
            'users.role',
            'persons.name',
            'persons.paternal_name',
            'persons.maternal_name',
            'persons.document_number',
            'users.is_active',
            // 'places.name',
            // 'places.id',
        )
            ->join('persons', 'persons.id', '=', 'users.person_id')
            // ->join('user_places', 'users.id','=', 'user_places.user_id')
            // ->join('places', 'places.id', '=', 'user_places.place_id')
            ->paginate($perPage)->appends($request->query());

        return Inertia::render('admin/users/index', [
            'items' => $items,
            'headers' => $this->user->headers,
            'filters' => [
                'search' => $request->search,
            ],
            'perPageOptions' => [10, 25, 50, 100], // Opciones de cantidad de elementos por página
        ]);
    }


    public function store(Request $request)
    {


        $person = new Person();
        $person->name = $request->name;
        $person->paternal_name = $request->paternal_name;
        $person->document_number = $request->document_number;

        $person->save();

        $user = new User();
        $user->person_id = $person->id;
        $user->fullname = $request->name . ' ' . $request->paternal_name . ' ' . $request->maternal_name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with('success', 'Elemento creado exitosamente.');
    }

    public function update(Request $request, User $user)
    {
        $person = Person::find($user->person_id);
        $person->name = $request->name;
        $person->paternal_name = $request->paternal_name;
        $person->document_number = $request->document_number;

        $person->save();

        $user->fullname = $request->name . ' ' . $request->paternal_name . ' ' . $request->maternal_name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Elemento actualizado exitosamente.');
    }

    public function updateState(Request $request, $id)
    {
        $user = User::find($id);
        $user->is_active = !$user->is_active;
        $user->save();
        return redirect()->back()->with('success', 'Elemento actualizado exitosamente.');
    }

    public function destroy(User $user)
    {

        $person = Person::find($user->person_id);
        $person->delete();
        $user->delete();
        return redirect()->back()->with('success', 'Elemento eliminado exitosamente.');
    }
}
