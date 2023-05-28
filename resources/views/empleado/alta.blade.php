@extends('base')
@section('contenido')
 <div class="text-center">
    <h2>Registro de Empleados</h2>
    <p class="lead">Completa los datos solicitados</p>
 </div>
 <div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form class="mt-0" action='{{asset("/empleado")}}' method="POST" enctype="multipart/form-data">
            @csrf
            @include('empleado.formulario')  
        </form>
    </div>
</div>

@endsection