<div class="row">
    <div class="col">
        <select name="producto" id="" class="form-control">
                <option value="">Seleccione un producto</option>
                @foreach ($Productos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre."(".$item->stock.")"}} </option>
                @endforeach
                
        </select>
    </div>
    <div class="col">
        <input type="text" name="cantidad" class="form-control" id="inputPass" placeholder="cantidad">
    </div>
    
    <div class="col">
        <button type="submit" class="btn btn-info">Agregar</button>
    </div>
</div>