<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-9">
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{old('nombre')}}" required placeholder="Favor introduzca el nombre de Menu">
    </div>
</div>                
 
<div class="form-group row">
    <label for="url" class="col-lg-2 col-form-label requerido">URL</label>
    <div class="col-lg-9">
        <input type="text" id="url" name="url" class="form-control"  value="{{ old('url')}}" required placeholder="Favor introduzca el nombre de Menu">
    </div>
</div>  

<div class="form-group row">
    <label for="icono" class="col-lg-2 col-form-label requerido">icono</label>
    <div class="col-lg-9">
        <input type="text" id="icono" name="icono" class="form-control" value="{{old('icono')}}" placeholder="Favor introduzca el nombre de Menu">
    </div>
    <div class="col-lg-1">
    <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
    </div>
</div>  