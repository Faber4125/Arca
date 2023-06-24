<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class InventarioController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    } 
public function index()
{
    $inventarios = Inventario::paginate();
    return view('inventario.index')->with('inventarios',$inventarios);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('inventario.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{        
    $inventarios = new Inventario();

    $inventarios->articulo = $request->get('articulo');
    $inventarios->marca = $request->get('marca');
    $inventarios->modelo = $request->get('modelo');
    $inventarios->cantidad = $request->get('cantidad');
    $inventarios->preciou = $request->get('preciou');
    $inventarios->total = $request->get('total');

    $inventarios->save();

    return redirect('/inventarios');

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
    $inventario = Inventario::find($id);
    return view('inventario.edit')->with('inventario',$inventario);
}


public function update(Request $request, $id)
{
    $inventario = Inventario::find($id);

    $inventario->articulo = $request->get('articulo');
    $inventario->marca = $request->get('marca');
    $inventario->modelo = $request->get('modelo');
    $inventario->cantidad = $request->get('cantidad');
    $inventario->preciou = $request->get('preciou');
    $inventario->total = $request->get('total');
    $inventario->save();

    return redirect('/inventarios');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $inventario = Inventario::find($id);
    $inventario->delete();
    return redirect('/inventarios');
}
}

