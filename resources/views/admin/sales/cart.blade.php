@extends('admin.layout')

@section('title', 'Cart')

@section('content')
    @include('admin.shared.flash-messages') {{-- incluyo el bloque para mensajes flash --}}  
    <ol class="breadcrumb page-breadcrumb">               
        <li class="breadcrumb-item"> <a href="{{route('admin.sales.index')}}" > <i class="fal fa-arrow-left"></i> Sales </a> </li> 
        <li class="breadcrumb-item active">Update</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> 

    <div class="row">
        <div class="col-md-12">        
            {{-- <a href="#" class="btn btn-primary" > <i class="fal fa-pen"></i> Registrar categoría</a>  --}}                
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Cart: 
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <form action="{{route('admin.sales.update', $sale)}}" method="POST">

                            </form>
                            <div class="col-xl-3 col-md-3">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="searchproductinput" name="searchproductinput" list="searchproduct" autocomplete="off" style="    border: 1px solid #d0d0d0;">
                                        <datalist id="searchproduct">
                                            {{-- @foreach ($products as $sproduct) --}}
                                                <option>Producto 1</option>
                                                <option>Producto 2</option>
                                                <option>Producto 3</option>
    
                                            {{-- @endforeach --}}
                                        </datalist>
    
                                        <div class="input-group-prepend">
                                            <a class="rounded-0 btn btn-info text-white back searchproduct" style="padding-top: 10px;" data-idevent="1"><i class="fal fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="scrollbar scrollbar-info animate__animated animate__pulse">                                
                                        <div class="accordion force-overflow" id="accordionCategories">                                
                                            @forelse ($categories as $category)

                                            <ul class="list-group">
                                                <li class="list-group-item " style='cursor:pointer' onclick="getProductsByCategory({{$category->identifier}})">
                                                    <strong> cat {{$category->title}} </strong>
                                                </li>
                                            </ul>
                                            
                                            @empty
                                                <p>No hay categorias.</p>
                                            @endforelse                                
                                        </div>                                
                                </div>                            
                            </div>
    
                            <div class="col-xl-6 col-md-6 animate__animated animate__fadeIn"> 
                                <div class="table-wrapper-scroll-y my-custom-scrollbar" id="tablaItemProductos">
                                    <table class="table table-bordered table-sm m-0 tablaItems" id="tablaProductos">
                                        <thead class="bg-primary-500">
                                            <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Price/Unit</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="spinner-grow d-none text-primary loaderProducts" role="status">
                                        <span class="sr-only">Loading...</span>
                                </div>                                                   
                            </div>
    
                            <div class="col-xl-3 col-md-3">
                                <div class="container"  style="background-color:rgba(0,0,0,.03); border:0;">
                                    <h6 class="pt-2 text-center"><span class="font-weight-bold">Expenses breakdown</span></h6>
                                    <div class="spinner-grow d-none text-primary loaderProductsInCart" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>                                    
                                    <div id="listCart" >

                                    </div>                                                                                                               
                                </div>
                            </div>                        
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('stylesCss')
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/notifications/sweetalert2/sweetalert2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/verticalScrollbar.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/verticalScrollbarTable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">  
@endpush

@push('scriptsJs') 
    <script src="{{ asset('smartadmin/js/datagrid/datatables/datatables.bundle.js') }}" ></script>  
    <script src="{{ asset('smartadmin/js/notifications/sweetalert2/sweetalert2.bundle.js') }}" ></script>   
     @include('admin.sales.js.cart') {{-- include con un file blade porque un archivo js no me permitía --}}
@endpush