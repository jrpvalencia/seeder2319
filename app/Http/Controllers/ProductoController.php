<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){
        return view('productos.create');
    }
    public function store(Request $request)
    {
        //
        
        $pro = new producto();
        $pro -> nombre=$request->nombre; 
        $pro -> descripcion=$request->descripcion; 
        $pro -> precio=$request->precio; 
        $pro -> existencias=$request->existencias; 
        $pro -> proveedor=$request->proveedor;
        $pro -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        //
    }
}
