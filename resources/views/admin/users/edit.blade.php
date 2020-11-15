@extends('admin.layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('partials.flash-message') {{-- incluyo el bloque para mensajes flash --}}  
                                             
        <a href="{{route('admin.users.index')}}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i>  Regresar</a>

      <div class="row">
        <div class="col-md-6">
          <div class="card card-profile">
                <div class="card-body">
                    <div class="card-body">
                        @include('partials.error-messages')                        
                        <h3 class="card-title">Actualizar información</h3> 
                        <form action="{{route('admin.users.update',$user)}}" method="POST">
                            @csrf  {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="name">Nombre completo</label>
                                <input type="text" class="form-control" name="name" value="{{old('name', $user->name)}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electronico</label>
                                <input type="email" class="form-control" name="email" value="{{old('email', $user->email)}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Breve descripción del usuario</label>
                                <textarea class="form-control" name="about"  rows="5">{{old('about', $user->about)}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                                <span class="help-block">Dejar en blanco sino quiere cambiar la contraseña</span>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Repite la contraseña</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <button class="btn btn-primary btn-block"> <i class="fas fa-save"></i> Actualizar usuario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-profile">
                <div class="card-body">
                    <div class="card-body">
                        <h3 class="card-title">Roles y permisos</h3> 
                        @role('Admin')
                        <form action="{{route('admin.users.roles.update',$user)}}" method="POST">
                            @csrf  {{ method_field('PUT') }}
                            @include('admin.users.roles.checkboxes') {{--incluyo el foreach con checkboxes de roles--}}
                            <button class="btn btn-primary btn-block"><i class="fas fa-save"></i> Actualizar Roles y permisos</button>
                        </form>
                        @else
                            <ul class="list-group">
                                @forelse ($user->roles as $role)
                                    <li class="list-group-item"> {{$role->name}}</li>
                                @empty
                                    <li class="list-group-item"> No tiene roles</li>
                                @endforelse
                            </ul>
                        @endrole 
                    </div>
                </div>
            </div>
            <div class="card card-profile">
                <div class="card-body">
                    <div class="card-body">
                        <h3 class="card-title">Permisos</h3> 
                        @role('Admin')
                        <form action="{{route('admin.users.permissions.update',$user)}}" method="POST">
                            @csrf  {{ method_field('PUT') }}
                            @include('admin.users.permissions.checkboxes',['model' => $user]) {{--incluyo el foreach con checkboxes de permisos--}}           
                            <button class="btn btn-primary btn-block"><i class="fas fa-save"></i> Actualizar permisos</button>
                        </form>
                        @else
                            <ul class="list-group">
                                @forelse ($user->permissions as $permission)
                                    <li class="list-group-item"> {{$permission->name}}</li>
                                @empty
                                    <li class="list-group-item"> No tiene permisos</li>
                                @endforelse
                            </ul>
                        @endrole
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection





        
        
    