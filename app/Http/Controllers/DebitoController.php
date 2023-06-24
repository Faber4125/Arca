<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credito;
use App\Models\Debito;

class DebitoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    } 
public function index()
{
    $debitos = Debito::all();
    return view('debito.index')->with('creditos',$debitos);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('debito.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{        
    $debitos = new Debito();

    $debitos->fecha = $request->get('fecha');
    $debitos->rubro = $request->get('rubro');
    $debitos->ingreso = $request->get('ingreso');
    $debitos->egreso = $request->get('egreso');

    $debitos->save();

    return redirect('/debitos');

}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $debito = Debito::find($id);
    return view('debito.edit')->with('debito',$debito);
}


public function update(Request $request, $id)
{
    $debitos  = Debito::find($id);

    $debitos->fecha = $request->get('fecha');
    $debitos->rubro = $request->get('rubro');
    $debitos->ingreso = $request->get('ingreso');
    $debitos->egreso = $request->get('egreso');

    $debitos->save();

    return redirect('/debitos');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $debito = Debito::find($id);
    $debito->delete();
    return redirect('/debitos');
}
}
