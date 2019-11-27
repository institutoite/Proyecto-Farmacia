
<div class="row">
    <div class="form-group col-3">
   <!-- <label for="proveedor_id" class="col-lg-3 control-label requerido">proveedor</label>-->
        <select name="proveedor_id" id="proveedor_id" class="form-control" required>
            <option value="">Seleccione Proveedor</option>
            @foreach($Proveedor as $id => $nombre)
            <option  value="{{$nombre['id']}}" >{{$nombre['razonsocial']}}</option>
            @endforeach
        </select>
    </div> 

    <div class="form-group col-3">
        <input type="date" name="fecha" class="form-control" value="{{old('fecha',$Proveedorcito->fecha ?? '')}}">
    </div>
    <div class="form-group col-16">
        <input type="text" name="observacion" class="form-control" value="{{old('observacion',$Proveedorcito->observacion ?? '')}}" placeholder="ingrese una observacion">
    </div> 
</div>






