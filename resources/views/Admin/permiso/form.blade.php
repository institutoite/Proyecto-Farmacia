<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-9">
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{old('nombre')}}" required placeholder="Favor introduzca el nombre de Menu">
    </div>
</div>                
 
<div class="form-group row">
    <label for="url" class="col-lg-2 col-form-label requerido">Slug</label>
    <div class="col-lg-9">
        <input type="text" id="url" name="slug" class="form-control"  value="{{ old('slug')}}" required placeholder="Slug">
    </div>
</div>  