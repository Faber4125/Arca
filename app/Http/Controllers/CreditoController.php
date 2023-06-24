<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credito;

class CreditoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    } 
public function index()
{
    $creditos = Credito::all();
    return view('credito.index')->with('creditos',$creditos);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('credito.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{        
    $creditos = new Credito();

    $creditos->fecha = $request->get('fecha');
    $creditos->rubro = $request->get('rubro');
    $creditos->ingreso = $request->get('ingreso');
    $creditos->egreso = $request->get('egreso');

    $creditos->save();

    return redirect('/creditos');

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
    $credito = Credito::find($id);
    return view('credito.edit')->with('credito',$credito);
}


public function update(Request $request, $id)
{
    $credito = Credito::find($id);

    $credito->fecha = $request->get('fecha');
    $credito->rubro = $request->get('rubro');
    $credito->ingreso = $request->get('ingreso');
    $credito->egreso = $request->get('egreso');

    $credito->save();

    return redirect('/creditos');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $credito = Credito::find($id);
    $credito->delete();
    return redirect('/creditos');
}
}
