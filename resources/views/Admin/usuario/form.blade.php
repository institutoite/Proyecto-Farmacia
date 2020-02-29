<div class="input-group mb-3">
    <input type="text" name="usuario" class="form-control" value="{{old('usuario',$UsuarioBuscado->usuario ?? '')}}" placeholder="ingrese Usuario">
    <div class="input-group-append">
       
    </div>
</div>
<div class="input-group mb-3">
    <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña">
    <div class="input-group-append">
        
    </div>
</div>
<div class="input-group mb-3">
    <input type="text" name="nombre" class="form-control" value="{{old('nombre',$UsuarioBuscado->nombre ?? '')}}" placeholder="ingrese nombre">
    <div class="input-group-append">
       
    </div>
</div>



<div class="form-group mb-3">
        <select name="rol_id" id="rol_id" class="form-control" required>
            <option value="">Seleccione el rol</option>
            @foreach($rols as $id => $nombre)
                <option
                value="{{$id}}" >
                {{$nombre}}
                </option>
            @endforeach
        </select>
</div>


