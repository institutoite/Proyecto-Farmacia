@if ($item["submenu"] == [])
<li class="nav-icon" data-id="{{$item["id"]}}">
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
        <a  href="{{url("Admin/menu/". $item["id"] . "/editar")}}">{{$item["nombre"] . " | Url -> " . $item["url"]}} Icono -> 
            <i style="font-size:20px;" class="fa fa-fw {{isset($item["icono"]) ? $item["icono"] : ""}}"></i>
        </a>
    </div>
</li>
@else
<li class="dd-item dd3-item" data-id="{{$item["id"]}}">
   
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
        <a href="{{url("Admin/menu/". $item["id"] . "/editar") }}">{{ $item["nombre"] . " | Url -> " . $item["url"]}} Icono -> <i style="font-size:20px;" class="fa fa-fw {{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
    </div>
    <ol class="dd-list">
        @foreach ($item["submenu"] as $submenu)
        @include("Admin.menu.menu-item",[ "item" => $submenu ])
        @endforeach
    </ol>
</li>
@endif