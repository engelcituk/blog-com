@extends('layouts.admin')

@section('title', 'Perfil')


@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.shared.flash-messages') 
                                           
        <a href="{{route('admin.users.index')}}" class="btn btn-warning"> <i class="fal fa-arrow-left"></i>  Regresar</a>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card mb-g rounded-top">
                    <div class="row no-gutters row-grid">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                            <img src="{{asset('smartadmin/img/demo/avatars/profile.png')}}" class="rounded-circle shadow-2 img-thumbnail" alt="{{$user->name}}">

                                <h5 class="mb-0 fw-700 text-center mt-3">
                                        {{$user->name}}
                                    <small class="text-muted mb-0">{{$user->getRoleNames()->implode(', ')}}</small>
                                </h5>
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="list-group-item"> <b>Email:</b> {{$user->email}}</li>
                                {{-- <li class="list-group-item"> <b>Publicaciones:</b> {{$user->posts()->count() }}</li> --}}
                                @if ($user->roles->count())
                                    <li class="list-group-item"><b>Roles: </b>{{$user->getRoleNames()->implode(', ')}}</li>
                                @endif
                                <a href="#" class="btn btn-primary">Editar</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-g">
                    <div class="card-body py-0 px-4 border-faded border-right-0 border-bottom-0 border-left-0">
                        <div class="d-flex flex-column align-items-center">
                            {{-- @forelse ($user->posts as $post)
                                <div class="d-flex flex-row w-100 py-4">
                                    <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                        <span class="profile-image profile-image-md rounded-circle d-block mt-1" style="background-image:url('{{asset('smartadmin/img/demo/avatars/profile.png')}}'); background-size: cover;"></span>
                                    </div>
                                    <div class="mb-0 flex-1 text-dark">
                                        <div class="d-flex">
                                            <a href="{{ route('posts.show', $post) }}" target="_blank" class="text-dark fw-500">
                                                {{$post->title}}
                                            </a>
                                            <span class="text-muted fs-xs opacity-70 ml-auto">
                                                    Publicado el: {{$post->published_at->format('d/m/Y')}}
                                            </span>
                                        </div>
                                        <p class="mb-0">
                                            {{$post->excerpt}}
                                        </p>
                                    </div>
                                </div>
                                @unless ($loop->last)
                                    <hr class="m-0 w-100">                                    
                                @endunless
                            @empty
                                <small class="text-muted fs-xs opacity-70">
                                    Aun no tiene publicaciones
                                </small>
                            @endforelse  --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-g rounded-top">
                        <div class="row row-grid no-gutters">
                            <div class="col-12">
                                <div class="p-3">
                                    <h2 class="mb-0 fs-xl">
                                        Roles
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <div class="row no-gutters row-grid">    
                        <div class="col-12">
                            <ul class="list-group">
                                @forelse ($user->roles as $role)
                                    <li class="list-group-item"> <b>Role:</b> {{$role->name}}
                                        <br>
                                        @if ($role->permissions->count())
                                            <small class="text-muted fs-xs opacity-70">
                                                Permisos: {{$role->permissions->pluck('name')->implode(', ')}}
                                            </small>
                                        @endif
                                    </li> 
                                @empty
                                    <small class="text-muted fs-xs opacity-70">
                                            Aun no tiene roles
                                    </small>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-g rounded-top">
                        <div class="row row-grid no-gutters">
                            <div class="col-12">
                                <div class="p-3">
                                    <h2 class="mb-0 fs-xl">
                                        Permisos adicionales
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <div class="row no-gutters row-grid">    
                        <div class="col-12">
                            <ul class="list-group">
                                @forelse ($user->permissions as $permission)
                                    <li class="list-group-item"> {{$permission->name}}</li> 
                                @empty
                                    <small class="text-muted fs-xs opacity-70">
                                        Aun no tiene permisos extras
                                    </small>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
    
@endsection





        
        
    