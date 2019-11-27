

<div class="input-group mb-3">
    <input type="number" name="sueldo" class="form-control" value="{{old('sueldo',$EmpleadoBuscado->sueldo ?? '')}}" placeholder="ingrese sueldo">
</div>

<div class="input-group mb-3">
    <input type="date" name="fechaingreso" class="form-control" value="{{old('fechaingreso',$EmpleadoBuscado->fechaingreso ?? '')}}"> 
</div>
<div class="form-group">
    <label for="tipoproducto_id" class="col-lg-3 control-label requerido">Persona</label>
    <div class="col-lg-8">
        <select name="persona_id" id="persona_id" class="form-control" required>
            <option value="">Seleccione una persona</option>
            @foreach($Personas as $id => $nombre)
               
            <option  value="{{$nombre['id']}}" >{{$nombre['nombre']}}</option>

            @endforeach
        </select>
    </div>
</div> 

