<div class="row">
    <div class="col">
        <select name="producto" id="id_producto" class="form-control">
                <option value="">Seleccione un producto</option>
                @foreach ($Productos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                @endforeach
                
        </select>
    </div>
    
    <div class="col">
        <input type="numeric" name="stock" readonly class="form-control" id="id_stock" placeholder="stock">
    </div>
     

    <div class="col">
        <input type="numeric" hide name="cantidad" class="form-control" id="id_cantidad" placeholder="cantidad" value="0" autocomplete="false">
    </div>

    
    <div class="col">
        <button type="submit" id="id_agregar" class="btn btn-info">Agregar</button>
    </div>
</div>