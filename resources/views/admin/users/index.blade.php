
@extends('admin.layout')

@section('title', 'Usuarios')

@section('content')
    @include('admin.shared.flash-messages') {{-- incluyo el bloque para mensajes flash --}}  
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item">TF</a></li>
        <li class="breadcrumb-item">Main</li>
        <li class="breadcrumb-item active">Usuarios</li>    
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
<div class="row">
    <div class="col-md-12">
        
             <a href="{{route('admin.users.create')}}" class="btn btn-primary" > <i class="fal fa-plus"></i> Registrar usuario</a><br>
        
         
        <div id="panel-1" class="panel mt-3">
            <div class="panel-hdr">
                <h2>
                    Lista de  <span class="fw-300"><i>usuarios</i></span>
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- datatable start -->
                    <table id="tableUsers" class="table table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->getRoleNames()->implode(', ')}}</td>
                                    <td>
                                        @can('view', $user)
                                            <a class="btn btn-info btn-sm" href="{{route('admin.users.show', $user)}}"><i class="fal fa-eye"></i> </a> 
                                        @endcan
                                        @can('update', $user)
                                            <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fal fa-edit"></i> </a>
                                        @endcan
                                        @can('delete', $user)
                                            <button class="btn btn-danger btn-sm" onclick="deleteUser({{$user->id}})"><i class="fal fa-trash"></i>
                                            </button>
                                        @endcan
                                    </td> 
                                </tr>
                                @empty
                                <tr>
                                    <td>:(</td>
                                    <td>:(</td>
                                    <td>:(</td>
                                </tr>
                            @endforelse
                        </tbody>  
                    </table>
                    <!-- datatable end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('stylesCss')
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/notifications/sweetalert2/sweetalert2.bundle.css') }}">
@endpush
@push('scriptsJs') 
    <script src="{{ asset('smartadmin/js/datagrid/datatables/datatables.bundle.js') }}" ></script>  
    <script src="{{ asset('smartadmin/js/notifications/sweetalert2/sweetalert2.bundle.js') }}" ></script>   
    @include('admin.users.js.index') 
@endpush
