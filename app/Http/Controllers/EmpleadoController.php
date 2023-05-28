<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; 

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados=Empleado::all(); 
        return view('empleado.index',['empleados'=>$empleados]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.alta'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoEmpleado= new Empleado; 
       $nuevoEmpleado->nombre=$request->input('nombre'); 
       $nuevoEmpleado->apellidoP=$request->input('apellidoP'); 
       $nuevoEmpleado->apellidoM=$request->input('apellidoM'); 
       $nuevoEmpleado->telefono=$request->input('telefono'); 
       $nuevoEmpleado->save(); 
       return redirect('/empleado'); 
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
        $empleados = Empleado::find($id); 
        return view('empleado.actualiza',['empleados'=>$empleados]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleados = Empleado::find($id); 
       $empleados->nombre=$request->input('nombre'); 
       $empleados->apellidoP=$request->input('apellidoP'); 
       $empleados->apellidoM=$request->input('apellidoM'); 
       $empleados->telefono=$request->input('telefono'); 
       $empleados->save(); 
       return redirect('/empleado'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleados = Empleado::find($id); 
        $empleados->delete(); 
        return redirect('/empleado');
    }
}
