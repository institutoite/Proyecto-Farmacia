{{--dd($Tipos)--}}
<div class="input-group mb-3">
    <input type="text" name="nombre" class="form-control" value="{{old('nombre',$Datos->nombre ?? '')}}" placeholder="ingrese nombre">
</div>

<div class="form-group">
    <label for="tipoproducto_id" class="col-lg-3 control-label requerido">TipoProducto</label>
    <div class="col-lg-8">
        <select name="tipoproducto_id" id="tipoproducto_id" class="form-control" required>
            <option value="">Seleccione el tipo producto</option>
            @foreach($Dato as $id => $nombre)
                <option value="{{$id}}">{{$nombre}}</option>
            @endforeach
        </select>
    </div>
</div>