
@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible" data-auto-dismiss="3000">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Mensaje de Sistema </h5>
            <div class="alert alert-success">
                <ul>
                   
                        <li>{{ session('mensaje') }}</li>
                   
                </ul>
            </div>
    </div>
@endif