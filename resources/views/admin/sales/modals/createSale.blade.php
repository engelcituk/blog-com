<div class="modal fade" id="createSale" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Datos del cliente 
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                @include('admin.shared.error-messages') {{-- incluyo el bloque para mensajes flash --}}  
                <div class="container"> 
                    <form action="{{route('admin.sales.store')}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left">Nombre del cliente</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-user fs-xl"></i></span>                           
                                </div> 
                                <input type="text" class="form-control" id="firstname_client" name="firstname_client" value="{{ old('firstname_client')}}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left">Apellidos del cliente</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-user fs-xl"></i></span>
                                </div>
                            <input type="text" class="form-control" id="lastname_client" name="lastname_client" value="{{ old('lastname_client')}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left">Email del cliente</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-envelope-square fs-xl"></i></span>
                                </div>
                            <input type="email" class="form-control" id="email_client" name="email_client" value="{{ old('email_client')}}" >
                            </div>
                        </div>                            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal"><i class="fal fa-window-close fs-xl"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="fal fa-plus-square fs-xl"></i> Guardar</button> 
                        </div>
                    </form>
                </div>                            
            </div> 
        </div>
    </div>
</div>