<script>

const csrf_token = $('meta[name="csrf-token"]').attr('content'); 
const routeGetItemsCart = "{{route('admin.sales.itemsincart',  $sale)}}"; 
const routeCheckout = "{{route('admin.sales.checkout', $sale)}}"; 
const statusSale = {{$sale->status}};
const styleBtnDeleteItem = 'style="padding: .2rem .2rem!important;"';

const getProductos = async () => { // para el manejo de errores en funciones async se usa try catch
    $(".loaderProducts").removeClass( "d-none" ); //muestro loader
    try {        
        const response = await fetch(`{{ url('admin/sales/cart/getproducts') }}`);
        const data = await response.json(); 
        leerItemsProducts( data ); //ejecutar una función aparte para mostrar los items    
    } catch (error) {
        //manejo del error
        console.log(error)
        
    }    
}

const getItemsInCart = async () => { // para el manejo de errores en funciones async se usa try catch
    $(".loaderProductsInCart").removeClass( "d-none" ); //muestro loader
    try {        
        const response = await fetch(routeGetItemsCart);
        const data = await response.json(); 
        leerItemsProductsInCart( data ); //ejecutar una función aparte para mostrar los items    
    } catch (error) {
        //manejo del error
        console.log(error)        
    }    
}

getProductos(); //ejecuto la funcion asyncronica, luego pinto la repuesta con leerItemsProducts(data)
getItemsInCart() //ejecuto la funcion asyncronica, luego pinto la repuesta con leerItemsProductsInCart(data)

const leerItemsProducts = (data) => {
    if(data.length > 0){
        $(".loaderProducts").addClass("d-none"); //muestro gift loader
        $("#tablaProductos tbody").empty();//limpio tbody de tabla
        for (let i = 0; i < data.length; i++) {

            const id = data[i].identifier;
            const title = data[i].title;
            const picture = data[i].picture;
            const description = data[i].details;
            const price = Math.floor(Math.random() * 101); 
            const quantity = 0;
            const totalPrice = price * quantity;

            let btnDisabled = statusSale ? 'disabled' : '';

            const trInBodyTablaProductos = `
            <tr>
                <td>
                    <strong>${title} - ${id} </strong><br>
                    <img src="{{ asset('img/card.png')}}" width="130" height="90"><br>
                    <div>descripcion del producto</div>
                    
                </td>
                <td>
                    ${price}
                </td>
                <td> 
                    <strong>${quantity}</strong><br><br>
                    <button class=" btn-info rounded-0 btn text-white btn-sm mr-2" ${btnDisabled} >
                        <i class="fal fa-minus"></i>
                    </button>
                    <button class=" btn-danger rounded-0 btn text-white btn-sm" ${btnDisabled}>
                        <i class="fal fa-plus"></i>
                    </button>
                </td>
                <td>
                    <strong>$${totalPrice}</strong><br><br>
                    <button class="btn-success rounded-0 btn text-white btn-sm"  ${btnDisabled}>
                        Add
                    </button>
                </td>
            </tr>
            `;
            
            $("#tablaProductos tbody").append(trInBodyTablaProductos);
        }
    }
}

const leerItemsProductsInCart = (data) => {
    const { items } = data; //data me regresa ok=true, items[{..}], asi que aplico desestructuración del elemento requerido
    $("#listCart").empty();//limpio listCart    
    if(items.length > 0){            
        $(".loaderProductsInCart").addClass("d-none"); //muestro gift loader
        let total = 0;
        for (let i = 0; i < items.length; i++) {
            
            const id = items[i].id;
            const product_name = items[i].product_name;
            const quantity = items[i].quantity;
            const price = items[i].price;
            const subTotal = price * quantity; 
                    total += subTotal;
            const btnDisabled = statusSale ? 'disabled' : '';
            
            const listCart = `
                <div class="row border-bottom mb-2 animate__animated animate__tada" style="font-size:12px;">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <span>${product_name}</span>
                        <span>x ${quantity}</span>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-right">
                        <span>$ ${subTotal} </span>
                        <button class="btn btn-danger btn-sm" onclick="deleteItemInSale(${id})" ${btnDisabled} ${styleBtnDeleteItem}>
                            <i class="fal fa-times"></i>
                        </button>       
                    </div>
                </div>                                   
            `;
            
            $("#listCart").append(listCart);
        }

        const btnCheckout = statusSale ? 'success' : 'primary';
        const btnCheckoutMsg= statusSale ? 'Checkout Finished' : 'Checkout';
        const routeToCheckout = statusSale ? '#' : routeCheckout;

        htmlCheckout = `
            <div class="row mb-2 animate__animated animate__tada" style="font-size:14px;">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <span class="font-weight-bold">Total:</span>
                </div>                                
                <div class="col-lg-5 col-md-6 col-sm-12 text-right">
                <span class="font-weight-bold">$ ${total} </span>   
                </div>
            </div>
            <div class="row mb-2 animate__animated animate__tada" style="font-size:14px;">
                <a href="${routeToCheckout}" class="btn btn-${btnCheckout} btn-block">${btnCheckoutMsg}</a>                                            
            </div>            
        `;

        $("#listCart").append(htmlCheckout);

    } else {
        $(".loaderProductsInCart").addClass("d-none"); //addClass d-none gift loader
        const listCart = `
            <div class="row border-bottom mb-2 animate__animated animate__tada" style="font-size:12px;">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    There are no items in the cart                    
                </div>
            </div>                                   
        `;

        $("#listCart").append(listCart);
    }
}

const getProductsByCategory = ( idCategory ) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf_token
        }
    });
    $.ajax({
        url: "{{ url('admin/sales/getproductsbycategory') }}",
        type: "post",
        data: {idCategory},
        beforeSend: function(){
            $(".loaderProducts").removeClass( "d-none" );
        },
        success: function(respuesta) {
            leerItemsProducts( respuesta );
        },
        complete:function(data){
            $(".loaderProducts").addClass("d-none");
        },
        error: function(respuesta) {
            swal({
                title: 'Oops...',
                text: '¡Algo salió mal!',
                type: 'error',
                timer: '1500'
            })
        }
    })
}
    
const deleteItemInSale = ( idItemInSale ) => {    
    $.ajax({
        url: "{{ url('admin/itemsinsale') }}" + '/' + idItemInSale,
        type: "DELETE",
        data: {
            '_method': 'DELETE',
            //'id': idItemInSale,
            '_token': csrf_token
        },
        success: function(respuesta) {
                // tablaAlergenos.ajax.reload();
            var ok= respuesta.ok;
            if(ok){
                getItemsInCart(); //regenero los items en el cart                
            }else {
                Swal.fire( ':(', respuesta.mensaje, 'error' )
            } 
        },
        error: function(respuesta) {
            swal({
                title: 'Oops...',
                text: '¡Algo salió mal!'+respuesta.mensaje,
                type: 'error',
                timer: '1500'
            })
        }
    });
}

    </script>