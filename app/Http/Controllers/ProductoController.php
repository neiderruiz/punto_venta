<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view("Productos.Insert", ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->flash('message', 'created');
        $this->validate($request, [
            //los nombres son los de los name de las inputs de la vista.
            'nombre' => 'required|regex:/^[A-Z0-9,.,a-z, ,á,é,í,ó,ú,ü,ñ,Ñ]+$/|between:3,100',
            'descripcion' => 'required|regex:/^[A-Z0-9,.,a-z, ,á,é,í,ó,ú,ü,ñ,Ñ]+$/|between:5,250',
            'precio' => 'required|numeric',
            'contenido' => 'required|regex:/^[A-Z0-9,.,a-z, ,á,é,í,ó,ú,ü,ñ,Ñ]+$/|between:2,100',
            'cantidad' => 'required|numeric'
            //'idd' => 'required|numeric'
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->contenido = $request->contenido;


        $producto->save();
        return redirect('/productos');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        session()->flash('message', 'updated');
        $this->validate($request, [
            //los nombres son los de los name de las inputs de la vista.
            'nombre' => 'required|regex:/^[A-Z0-9,.,a-z, ,á,é,í,ó,ú,ü,ñ,Ñ]+$/|between:3,100',
            'descripcion' => 'required|regex:/^[A-Z0-9,.,a-z, ,á,é,í,ó,ú,ü,ñ,Ñ]+$/|between:5,250',
            'precio' => 'required|numeric',
            'contenido' => 'required|regex:/^[A-Z0-9,.,a-z, ,á,é,í,ó,ú,ü,ñ,Ñ]+$/|between:2,100',
            'cantidad' => 'required|numeric'
            //'idd' => 'required|numeric'
        ]);

        $producto = Producto::findOrFail($request->id);
        $producto->update($request->all());
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect('/productos');
    }
}
