
@extends('layouts.admin')

@section('title', 'Posts')

@section('content')

    @include('admin.shared.flash-messages') {{-- incluyo el bloque para mensajes flash --}}         

<div class="row">
    <div class="col-md-12">

        @can('create', new App\Models\Post)
            <button class="btn btn-primary" data-toggle="modal" data-target="#createPost"><i class="fal fa-plus"></i> Register post</button>
        @endcan 
        
                 
        <div id="panel-1" class="panel mt-3">
            <div class="panel-hdr">
                <h2>
                    List of posts</span>
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- datatable start -->
                    <table id="tablaPosts" class="table table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>Creador por:</th>
                                {{-- <th>Categoría</th> --}}
                                <th>Ttulo</th>
                                <th>Url</th>
                                <th>Extracto</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{$post->user->name}}</td>
                                    {{-- <td>{{$post->category->name}} </td> --}}
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->url}}</td>
                                    <td>{{$post->excerpt}}</td>
                                    <td>                                        
                                        @can('update', $post)
                                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}"><i class="fal fa-edit"></i> </a>
                                        @endcan
                                        @can('delete', $post)
                                            <button class="btn btn-danger btn-sm" onclick="deletePost({{$post->id}})"><i class="fal fa-trash"></i>
                                            </button>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>:(</td>
                                    <td>:(</td>
                                    <td>:(</td>
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

@include('admin.posts.modals.createPost') 

@endsection

@push('stylesCss')
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/notifications/sweetalert2/sweetalert2.bundle.css') }}">
@endpush
@push('scriptsJs') 
    <script src="{{ asset('smartadmin/js/datagrid/datatables/datatables.bundle.js') }}" ></script>  
    <script src="{{ asset('smartadmin/js/notifications/sweetalert2/sweetalert2.bundle.js') }}" ></script>   
    @include('admin.posts.js.index') 
@endpush
