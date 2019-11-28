@if ($item["submenu"] == [])
   
        <li class="{{getMenuActivo($item["url"])}} nav-item">
            <a href="{{url($item['url'])}}">
                <i class="fa {{$item["icono"]}} far fa-circle nav-icon" ></i> <span>{{$item["nombre"]}}</span>
            </a>
        </li>
    
@else
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="fa {{$item["icono"]}} nav-icon fas fa-tachometer-alt"></i> 
          
            <span>{{$item["nombre"]}}</span>
            <i class="right fas fa-angle-left"></i>
        
        </a>
        <ul class="nav nav-treeview" style="display: block;">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif 

