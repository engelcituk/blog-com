@extends('layouts.admin')

@section('content')
    @include('admin.shared.flash-messages') {{-- incluyo el bloque para mensajes flash --}}  
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}" > <i class="fal fa-arrow-left"></i> Roles</a></li>
        <li class="breadcrumb-item">Configuración</li>
        <li class="breadcrumb-item">Roles</li>
        <li class="breadcrumb-item active">Crear</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> 

<div class="row">    
    <div class="col-md-6 ">
            
        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    Datos del <span class="fw-300"><i>rol</i></span>
                </h2> 

            </div>
            <div class="panel-container show">
                <div class="panel-content">
                @include('admin.shared.error-messages') {{-- incluyo el bloque para mensajes flash --}}  
                    <form action="{{route('admin.roles.store')}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left">Identificador:</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-user fs-xl"></i></span>
                                </div>
                            <input type="text" class="form-control" placeholder="Identificador del rol" aria-label="Identificador del rol" aria-describedby="addon-wrapping-left" name="name" value="{{old('name')}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left">Nombre completo del rol</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-user fs-xl"></i></span>
                                </div>
                            <input type="text" class="form-control" placeholder="Nombre completo del rol" aria-label="Nombre completo del rol" aria-describedby="addon-wrapping-left" name="display_name" value="{{ old('display_name')}}">
                            </div>
                        </div>
                        <label for="permisos"><strong>Permisos para el rol</strong></label>                     
                        <div class="row">
                            @include('admin.shared.permissions.checkboxes',['model' => $role]) {{-- checkboxes de permisos        --}}
                        </div>

                        <button class="mt-3 btn btn-primary btn-block"> Crear rol</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
          
    </div>    
</div>
@endsection

