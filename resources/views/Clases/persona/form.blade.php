
<div class="input-group mb-3">
    <input type="text" name="nombre" class="form-control" value="{{old('nombre',$PersonaBuscada->nombre ?? '')}}" placeholder="ingrese nombre">
</div>

<div class="input-group mb-3">
    <input type="text" name="apellidop" class="form-control" value="{{old('apellidop',$PersonaBuscada->apellidop ?? '')}}" placeholder="ingrese apellido paterno">
</div>

<div class="input-group mb-3">
    <input type="text" name="apellidom" class="form-control" value="{{old('apellidom',$PersonaBuscada->apellidom ?? '')}}" placeholder="ingrese apellido materno">
</div>

<div class="input-group mb-3">
    <input type="date" name="fechanacimiento" class="form-control" value="{{old('fechanacimiento',$PersonaBuscada->fechanacimiento ?? '')}}"> 
</div>

<div class="input-group mb-3">
    <input type="text" name="direccion" class="form-control" value="{{old('direccion',$PersonaBuscada->direccion ?? '')}}" placeholder="ingrese direccion">
</div>

<div class="input-group mb-3">
    <select name="genero" id="genero" class="form-control">
        <option> Elija una Opción </option>
        <option value="HOMBRE"> MASCULINO </option>
        <option value="MUJER"> FEMENINO </option>
    @isset($PersonaBuscada)
        @if ($PersonaBuscada->genero=='HOMBRE')
            <option> Elija una Opción </option>
            <option value="HOMBRE" selected> MASCULINO </option>
            <option value="MUJER"> FEMENINO </option>
        @else
            <option> Elija una Opción </option>
            <option value="HOMBRE"> MASCULINO </option>
            <option value="MUJER" selected> FEMENINO </option>
        @endif    
    @endisset
   
    </select>
</div>


<div class="input-group mb-3">
    <input type="number" name="telefono" class="form-control" value="{{old('telefono',$PersonaBuscada->telefono ?? '')}}" placeholder="ingrese telefono">
</div>

<div class="input-group mb-3">
    <input type="number" name="celular" class="form-control" value="{{old('celular',$PersonaBuscada->celular ?? '')}}" placeholder="ingrese celular">
</div>

<!--<div class="input-group mb-3">
    <select name="tipo" id="genero" class="form-control">
        <option value="">Ejila</option>
        <option value="proveedor">Proveedor</option>
        <option value="empleado">Empleado</option>
        <option value="cliente">Cliente</option>
    </select>
</div> -->


