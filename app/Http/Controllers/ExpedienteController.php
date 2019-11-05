<?php

namespace App\Http\Controllers;

use App\User;
use App\Materia;
use App\Juzgado;
use App\Proceso;
use App\Expediente;
use Illuminate\Http\Request;
use App\Http\Requests\ExpedienteRequest;

class ExpedienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep,mod', ['except' => ['edit', 'update', 'show']]);
    }

    public function index()
    {
        $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $expedientes = Expediente::whereNull('user_id')->latest()->paginate(3);
        return view('expedientes.index', compact('expedientes', 'juzgados'));
    }

    public function search(Request $request)
    {
        $select = $request->get('select');
        $search = $request->get('search');

        $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();

        $expedientes = Expediente::where('juzgado_id', '=', $search)
                    ->orWhere('juzgado_id', '=', $select)
                    ->paginate(3);
        return view('expedientes.index', compact('expedientes', 'juzgados'));

        // return $expedientes;
        // join('juzgados', 'expedientes.id' ,'expedientes.juzgado_id')
    }

    public function pendientes()
    {
        $pendientes = Expediente::where('user_id', auth()->id())->paginate(3);
        return view('expedientes.pedientes', compact('pendientes'));
    }


    public function create()
    {
        $materias = Materia::where('condition', '=', '1')->select('id', 'nombreMateria')->get();
        $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $procesos = Proceso::where('condition', '=', '1')->select('id', 'nombreProceso')->get();
        $users = User::all();
        return view('expedientes.create', compact('materias', 'juzgados', 'procesos', 'users'));
    }


    public function store(ExpedienteRequest $request)
    {
        Expediente::create($request->validated());
        return back()->with('status', 'Expediente guardado con éxito!');
    }


    public function show(Expediente $expediente)
    {
        return view('expedientes.show', compact('expediente'));
    }


    public function edit(Expediente $expediente)
    {
        $materias = Materia::all();
        $juzgados = Juzgado::all();
        $procesos = Proceso::all();
        $users = User::all();
        return view('expedientes.edit', compact('expediente', 'materias', 'juzgados', 'procesos', 'users'));
    }


    public function update(ExpedienteRequest $request, $id)
    {
        Expediente::whereId($id)->update($request->validated());
        return back()->with('status', 'Expediente fue asignado con éxito!');
    }


    public function destroy(Expediente $expediente)
    {
        //
    }
}
