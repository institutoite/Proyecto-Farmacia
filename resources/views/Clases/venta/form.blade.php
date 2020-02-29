<div class="row">
    <div class="form-group col-3">
   <!-- <label for="proveedor_id" class="col-lg-3 control-label requerido">proveedor</label>-->
        <select name="cliente_id" id="cliente_id" class="form-control" required>
            <option value="">Seleccione Cliente</option>
            @foreach($Clientes as $id => $nombre)
            <option  value="{{$nombre['id']}}" >{{$nombre['persona']['nombre']}}</option>
            @endforeach
        </select>
    </div> 

    <!--div class="form-group col-3">
        <input type="date" name="fecha" class="form-control" value="{{old('fecha',$Proveedorcito->fecha ?? '')}}">
    </div-->
    <div class="form-group col-16">
        <input type="text" name="descripcion" class="form-control" value="{{old('descripcion',$Proveedorcito->descripcion ?? '')}}" placeholder="ingrese una observacion">
    </div> 
</div>





