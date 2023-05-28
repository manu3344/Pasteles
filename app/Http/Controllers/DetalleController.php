<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;
use App\Models\Venta;
use App\Models\Producto;


class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        $productos = Producto::all(); 
        $detalles = Detalle::all();  
        $cartCollection = \Cart::getContent();
        return view('detalle.index', compact('detalles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ventas = Venta::all();
        $productos = Producto::all(); 
        $cartCollection = \Cart::getContent();
        return view('detalle.alta', compact('ventas', 'productos'))->with(['cartCollection' => $cartCollection]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cartCollection = \Cart::getContent();
        foreach($cartCollection as $cart){
            $nuevosDetalles=new Detalle;
            $nuevosDetalles->venta=$request->venta_id;
            $nuevosDetalles->producto=$cart->id;
            $nuevosDetalles->cantidad=$cart->quantity; 
            $nuevosDetalles->total=\Cart::get($cart->id)->getPriceSum(); 
            $nuevosDetalles->save(); 

        }
        \Cart::clear();
        return redirect('/detalle'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nuevosDetalles = Detalle::findOrFail($id);
        $ventas = Venta::all();
        $productos = Producto::all(); 
    
        return view('detalle.actualiza', compact('nuevosDetalles', 'ventas', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevosDetalles = Detalle::findOrFail($id);
        $nuevosDetalles->venta=$request->venta_id;
        $nuevosDetalles->producto=$request->producto_id;
        $nuevosDetalles->cantidad=$request->input('cantidad'); 
        $nuevosDetalles->total=$request->input('total'); 
        $nuevosDetalles->save(); 
        return redirect('/detalle'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Detalle::destroy($id);
        return redirect('/detalle');
    }
}
