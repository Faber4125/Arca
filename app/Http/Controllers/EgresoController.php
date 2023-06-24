<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egreso;

class EgresoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    } 
public function index()
{
    $egresos = Egreso::all();
    return view('egreso.index')->with('egresos',$egresos);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('egreso.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{        
    $egresos = new Egreso();

    $egresos->nombre = $request->get('nombre');
    $egresos->concepto = $request->get('concepto');
    $egresos->cantidad = $request->get('cantidad');

    $egresos->save();

    return redirect('/egresos');

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
    $egreso = Egreso::find($id);
    return view('egreso.edit')->with('egreso',$egreso);
}


public function update(Request $request, $id)
{
    $egreso = Egreso::find($id);

    $egreso->nombre = $request->get('nombre');
    $egreso->concepto = $request->get('concepto');
    $egreso->cantidad = $request->get('cantidad');

    $egreso->save();

    return redirect('/egresos');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $egreso = Egreso::find($id);
    $egreso->delete();
    return redirect('/egresos');
}
}
