<div class="form-floating mb-3">
    <input type="name" id="nombre" name="nombre" class="form-control" placeholder="Nombre"
    @if (@isset($empleados))
        value={{$empleados->nombre}}    
    @endif
    />
    <label for="nombre" class="form-label fuente">Nombre </label>
</div>
<div class="form-floating mb-3">
    <input type="name" id="apellidoP" name="apellidoP" class="form-control" placeholder="A. Paterno"
    @if (@isset($empleados))
        value={{$empleados->apellidoP}}    
    @endif
    />
    <label for="apellidoP" class="form-label fuente">Apellido Paterno</label>
</div>
<div class="form-floating mb-3">
    <input type="name" id="apellidoM" name="apellidoM" class="form-control" placeholder="A. Materno"
    @if (@isset($empleados))
        value={{$empleados->apellidoM}}    
    @endif
    />
    <label for="apellidoM" class="form-label fuente">Apellido Materno</label>
</div>

<div class="form-floating mb-3">
    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Telefono"
    @if (@isset($empleados))
        value={{$empleados->telefono}}    
    @endif
    />
    <label for="telefono" class="form-label fuente">Telefono</label>
</div>


<div class="text-center">
    <a class="btn btn-danger" href="{{url('/empleado')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Empleado</button>
</div>