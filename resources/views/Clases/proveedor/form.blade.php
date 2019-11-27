
<div class="input-group mb-3">
    <input type="text" name="rubro" class="form-control" value="{{old('rubro',$ProveedorBuscado->rubro ?? '')}}" placeholder="ingrese rubro">
</div>


<div class="input-group mb-3">
    <input type="text" name="nacionalidad" class="form-control" value="{{old('nacionalidad',$ProveedorBuscado->nacionalidad ?? '')}}" placeholder="ingrese nacionalidad">
</div>


<div class="input-group mb-3">
    <input type="text" name="razonsocial" class="form-control" value="{{old('razonsocial',$ProveedorBuscado->razonsocial ?? '')}}" placeholder="ingrese razon social">
</div>
<div class="form-group">
    <label for="tipoproducto_id" class="col-lg-3 control-label requerido">Persona</label>
    <div class="col-lg-12">
        <select name="persona_id" id="persona_id" class="form-control" required>
            <option value="">Seleccione una persona</option>
            @foreach($Personas as $id => $nombre)
               
            <option  value="{{$nombre['id']}}" >{{$nombre['nombre']}}</option>

            @endforeach
        </select>
    </div>
</div> 
