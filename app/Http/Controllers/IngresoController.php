<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingreso;

class IngresoController extends Controller
{
    
        public function __construct(){
            $this->middleware('auth');
        } 
    public function index()
    {
        $ingresos = Ingreso::paginate();
        return view('ingreso.index')->with('ingresos',$ingresos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $ingresos = new Ingreso();

        $ingresos->nombre = $request->get('nombre');
        $ingresos->concepto = $request->get('concepto');
        $ingresos->cantidad = $request->get('cantidad');
        $ingresos->cantidad2 = $request->get('cantidad2');

        $ingresos->save();

        return redirect('/ingresos');

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
        $ingreso = Ingreso::find($id);
        return view('ingreso.edit')->with('ingreso',$ingreso);
    }

    
    public function update(Request $request, $id)
    {
        $ingreso = Ingreso::find($id);

        $ingreso->nombre = $request->get('nombre');
        $ingreso->concepto = $request->get('concepto');
        $ingreso->cantidad = $request->get('cantidad');
        $ingreso->cantidad2 = $request->get('cantidad2');

        $ingreso->save();

        return redirect('/ingresos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingreso = Ingreso::find($id);
        $ingreso->delete();
        return redirect('/ingresos');
    }
}
