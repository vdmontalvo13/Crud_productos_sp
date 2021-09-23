<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

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
        return view('producto.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->producto = $request->get('txt_producto');
        $productos->idmarca= $request->get('txt_marca');
        $productos->descripcion = $request->get('txt_descripcion');
        $productos->precio_costo = $request->get('txt_precio_c');
        $productos->precio_venta = $request->get('txt_precio_v');
        $productos->existencia = $request->get('txt_existencia');


        $productos->save();

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
        $producto = Producto::find($id);
        return view('producto.editar')->with('producto',$producto);
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
        $producto = Producto::find($id);

        $producto->producto = $request->get('txt_producto');
        $producto->idmarca= $request->get('txt_marca');
        $producto->descripcion = $request->get('txt_descripcion');
        $producto->precio_costo = $request->get('txt_precio_c');
        $producto->precio_venta = $request->get('txt_precio_v');
        $producto->existencia = $request->get('txt_existencia');


        $producto->save();

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
        $producto = producto::find($id);
        $producto->delete();

        return redirect('/productos');
    }
}
