<?php

namespace App\Http\Controllers;

use App\Expediente;
use App\Juzgado;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PendientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $pendientes = Expediente::where('user_id', auth()->id())->latest()->paginate(3);
        return view('pendientes.index', compact('pendientes', 'juzgados'));
    }

    public function buscarp(Request $request)
    {
        $select = $request->get('selectp');
        // $search = $request->get('search');

        $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();

        $pendientes = Expediente::where('user_id', auth()->id())
                    ->Where('juzgado_id', '=', $select)
                    ->paginate(3);
        return view('pendientes.index', compact('pendientes', 'juzgados'));

        // return $expedientes;
        // join('juzgados', 'expedientes.id' ,'expedientes.juzgado_id')
    }

    public function welcome()
    {
        $date = Carbon::now();
        $date = Carbon::parse($date);
        // $resta = Carbon::parse('--02');
        // return $date->diffInDays($resta);
        $pendientes = Expediente::where('user_id', auth()->id())
                    // ->whereDate('fechaAudiencia', '=', $date)->get();
                ->select('id', 'numExpediente', 'fechaApertura', 'fechaAudiencia')->get();
        // $p = $pendientes->diffForHumans(); ->format('Y-m-d')
        return view('welcome', compact('pendientes'));
        // return $pendientes;
    }

    // public function welcome()
    // {
    //     $date = Carbon::now();

    //     $date = Carbon::parse($date)->subDays(2);
    //     // return $date;
    //     // $resta = Carbon::parse('--02');
    //     // return $date->diffInDays($resta);
    //     $pendientes = Expediente::where('user_id', auth()->id())
    //                 ->whereDate('fechaAudiencia', '=', $date)->get();
    //             // ->select('created_at', 'fechaAudiencia')->get();

    //     // return $pendientes;
    //     // $p = $pendientes->diffForHumans(); ->format('Y-m-d')
    //     return view('welcome', compact('pendientes'));
    //     // return $pendientes;
    // }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pendientes.show', compact('pendiente'));
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
