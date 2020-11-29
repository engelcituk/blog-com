@extends('layouts.admin')

@section('title', 'Checkout')

@section('content')
    @include('admin.shared.flash-messages') {{-- incluyo el bloque para mensajes flash --}}  
    <ol class="breadcrumb page-breadcrumb">               
        <li class="breadcrumb-item"> <a href="{{route('admin.sales.cart', $sale)}}" > <i class="fal fa-arrow-left"></i> Sales </a> </li> 
        <li class="breadcrumb-item active">Create</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> 

    <div class="row">
        <div class="col-md-12">        
            {{-- <a href="#" class="btn btn-primary" > <i class="fal fa-pen"></i> Registrar categoría</a>  --}} 
            <div id="panel-1" class="panel">                
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                              <h4 class="d-flex justify-content-between align-items-center mb-3">

                                @php  $total = 0; $itemsCount = count($itemsInSale); @endphp

                                <span class="text-muted">Your cart</span>
                                 <span class="badge badge-secondary badge-pill"> {{$itemsCount}}  </span>
                              </h4>
                              <ul class="list-group mb-3">
                                @forelse ($itemsInSale as $item)
                                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                    <h6 class="my-0">{{$item->product_name}} </h6>
                                      <small class="text-muted">$ {{ $item->price }} x {{ $item->quantity }} units</small>
                                    </div>
                                    @php 
                                  $subtotal =  $item->price * $item->quantity;
                                  $total += $subtotal; @endphp
                                    <span class="text-muted">$ {{$subtotal}} </span>
                                  </li>
                                                                     
                                @empty
                                  There are no items in the cart                                                        
                                @endforelse                                                                                                
                                <li class="list-group-item d-flex justify-content-between">
                                  <span><strong>Total </strong></span>
                                  <strong>$ {{ $total }}</strong>                                 
                                </li>
                                <br>

                              </ul>
                                                    
                            </div>
                            <div class="col-md-8 order-md-1">
                              <h4 class="mb-3">Billing info</h4>
                              @include('admin.shared.error-messages') {{-- incluyo el bloque para mensajes flash --}}  

                              <form action="{{route('admin.sales.update', $sale)}}" method="POST">

                                @csrf  {{ method_field('PUT') }}

                                @php  $readonly = ( $sale->status == 1) ? 'readonly': '';  
                                      $checkoutBtnMsg = ( $sale->status == 1) ? 'Checkout Finished': 'Finish checkout';
                                      $checkoutBtnType = ( $sale->status == 1) ? 'success': 'primary';
                                @endphp

                                <div class="row">
                                  <div class="col-md-6 mb-3">
                                    <label for="firstname_client">First name</label>
                                    <input type="text" class="form-control" name="firstname_client" value="{{ old('firstname_client', $sale->firstname_client) }}" required {{$readonly}} >
                                    <div class="invalid-feedback">
                                      Valid first name is required.
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="lastname_client">Last name</label>
                                    <input type="text" class="form-control" name="lastname_client" value="{{ old('lastname_client', $sale->lastname_client) }}" required {{$readonly}}>
                                    <div class="invalid-feedback">
                                      Valid last name is required.
                                    </div>
                                  </div>
                                </div>
                                                                                
                                <div class="mb-3">
                                  <label for="email_client">Email <span class="text-muted">(required)</span></label>
                                  <input type="email" class="form-control" name="email_client"  value="{{ old('email_client', $sale->email_client) }}" {{$readonly}}>
                                  <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                  </div>
                                </div>
                                                                                                              
                                <div class="row">
                                  <div class="col-md-6 mb-3">
                                    <label for="country_client">Country</label>
                                    <input type="text" class="form-control" name="country_client" value="{{ old('country_client', $sale->country_client) }}" required {{$readonly}}>
                                    <div class="invalid-feedback">
                                      Valid country client is required.
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="address_client">Address</label>
                                    <input type="text" class="form-control" name="address_client" value="{{ old('address_client', $sale->address_client) }}" required {{$readonly}} >
                                    <div class="invalid-feedback">
                                      Please enter address client.
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label for="note">Note <span class="text-muted">(optional)</span></label>
                                  <textarea name="note" class="form-control" {{$readonly}}> {{ $sale->note }}</textarea>
                                </div>
                                <input type="hidden" class="form-control" name="total" value="{{ $total }}" >
                                
                                <hr class="mb-4">
                                @php  $disabled = ( $total == 0 || $sale->status == 1) ? 'disabled': '';  @endphp

                                <button class="btn btn-{{$checkoutBtnType}} btn-lg btn-block" type="submit" {{ $disabled }}> {{$checkoutBtnMsg}}</button>

                              </form>
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
@endpush

@push('scriptsJs') 
    <script src="{{ asset('smartadmin/js/datagrid/datatables/datatables.bundle.js') }}" ></script>  
    <script src="{{ asset('smartadmin/js/notifications/sweetalert2/sweetalert2.bundle.js') }}" ></script>   
@endpush