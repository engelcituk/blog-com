
@extends('layouts.admin')

@section('title', 'Dasboard')


@section('content')
    @include('admin.shared.flash-messages') {{-- incluyo el bloque para mensajes flash --}}  
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}" >TF</a></li>
        <li class="breadcrumb-item">Main</li>
        <li class="breadcrumb-item active">Sales</li>    
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
<div class="row">
    <div class="col-md-12">                
         
        <div id="panel-1" class="panel mt-3">
            <div class="panel-hdr">
                <h2>
                    Dashboard</span>
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minima laborum vero hic, asperiores fugit voluptatem sunt culpa cum corporis soluta ex qui quaerat nemo, numquam expedita labore doloremque debitis!                    
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
@endpush
