{{--dd($Tipos)--}}
<div class="input-group mb-3">
    <input type="text" name="nombre" class="form-control" value="{{old('nombre',$Datos->nombre ?? '')}}" placeholder="ingrese nombre">
</div>
<div class="input-group mb-3">
    <input type="text" name="detalle" class="form-control" value="{{old('detalle',$Datos->detalle ?? '')}}" placeholder="ingrese detalle">
</div>
<div class="input-group mb-3">
    <input type="number" name="costo" class="form-control" value="{{old('costo',$Datos->costo ?? '')}}" placeholder="ingrese costo">
</div>


<div class="form-group">
    <label for="producto_id" class="col-lg-3 control-label requerido">TipoProducto</label>
    <div class="col-lg-8">
        <select name="tipoproducto_id" id="tipoproducto_id" class="form-control" required>
            <option value="">Seleccione el tipo producto</option>
            @foreach($Dato as $id => $alias)
                {{--<option value="{{$id}}">{{$alias}}</option>--}}
                @isset($Datos)     
                    <option  value="{{$id}}" {{$id==$Datos->tipoproducto_id ? 'selected':''}}>{{$alias}}</option>     
                @else
                    <option  value="{{$id}}">{{$alias}}</option>     
                @endisset 
            @endforeach
        </select>

        
    </div>
</div>