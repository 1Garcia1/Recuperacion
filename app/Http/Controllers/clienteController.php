<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use Illuminate\Support\Facades\DB;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $clientes=DB::table('clientes')
                    ->select('Id_cliente','Codigo_cliente','Nombre','Apellido','Direccion','Telefono','Correo')
                    ->where ('Nombre','LIKE','%'.$texto.'%')
                    ->orwhere ('Codigo_cliente','LIKE','%'.$texto.'%')
                    ->orderBy('Nombre','asc')
                    ->paginate(10);

                    return view('cliente.index',compact('clientes','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        error_log("hola");
        $cliente=new cliente;
        $cliente->Codigo_cliente=$request->input('Codigo_cliente');
        $cliente->Nombre=$request->input('Nombre');
        $cliente->Apellido=$request->input('Apellido');
        $cliente->Direccion=$request->input('Direccion');
        $cliente->Telefono=$request->input('Telefono');
        $cliente->Correo=$request->input('Correo');
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
