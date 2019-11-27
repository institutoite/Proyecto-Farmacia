
<div class="input-group mb-3">
    <input type="text" name="carnet" class="form-control" value="{{old('carnet',$ClienteBuscado->carnet ?? '')}}" placeholder="ingrese codigo">
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
