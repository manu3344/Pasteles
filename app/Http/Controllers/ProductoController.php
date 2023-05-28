<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all(); 
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias=Categoria::all();
        return view('producto.alta',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoProducto=new Producto;
        
        if($request->hasFile('image_path')){
            $file = $request->file('image_path'); 
            $destinationPath = 'images/' ; 
            $filename = time() .'-' .$file->getClientOriginalName();
            $uploadSuccess = $request ->file('image_path')->move($destinationPath,$filename);
            $nuevoProducto->image_path = $destinationPath . $filename;
        }
           
        
        $nuevoProducto->nombre=$request->nombre;
        $nuevoProducto->descripcion=$request->descripcion;
        $nuevoProducto->precio=$request->precio;
        $nuevoProducto->categoria=$request->categoria_id;
       
        $nuevoProducto->save();
        return redirect('/producto');
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
        $productos=Producto::findorfail($id);
        $categorias=Categoria::all();
        return view('producto.actualiza',['producto'=>$productos, 'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        
        // Actualizar los campos del producto
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria_id;
        
        // Actualizar la imagen solo si se ha enviado una nueva
        if ($request->hasFile('image_path')) {
            // Eliminar la imagen anterior si existe
            if ($producto->image_path) {
                Storage::delete($producto->image_path);
            }
            
            // Guardar la nueva imagen
            $file = $request->file('image_path');
            $destinationPath = 'images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $producto->image_path = $destinationPath . $filename;
        }
    
        $producto->save();
        
        return redirect('/producto');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id); 
        return redirect('/producto'); 
    }
}
