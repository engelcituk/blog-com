@extends('admin.layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        <a href="{{route('admin.users.index')}}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i>  Regresar</a>

      <div class="row">
        <div class="col-md-6">
          <div class="card card-profile">
                <div class="card-body">
                    <div class="card-body">
                        @include('partials.error-messages') 
                        <h3 class="card-title">Crear usuario</h3> 
                        <form action="{{route('admin.users.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre completo</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre de usuario</label>
                                    <input type="text" class="form-control" name="username" value="{{old('username')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electronico</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Breve descripción del usuario</label>
                                    <textarea class="form-control" name="about"  rows="3">{{old('about')}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="roles"><strong>Roles</strong></label>
                                        @include('admin.users.roles.checkboxes') {{--incluyo el foreach con checkboxes de roles--}}       
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="permisos"><strong>Permisos</strong></label>
                                        @include('admin.users.permissions.checkboxes',['model' => $user]) {{--incluyo el foreach con checkboxes de permisos--}}       
                                    </div>
                                </div>
                                <span class="text-muted">La contraseña será enviado vía email</span>

                                <button class="btn btn-primary btn-block"> <i class="fas fa-save"></i> Registrar usuario</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection





        
        
    