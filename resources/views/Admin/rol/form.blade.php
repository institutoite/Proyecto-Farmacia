<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{old('nombre',$data->nombre ?? '')}}" required placeholder="For introduzca un rol">
    </div>
</div>     