<script>
const csrf_token = $('meta[name="csrf-token"]').attr('content');    
const auth_user_id = $('meta[name="user_id"]').attr('content');     


$(document).ready(function(){
    $('#tablaPosts').dataTable({
        responsive: true,
        language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
    },
    });
});

// muestro el modal si hay errores
@if ($errors->any())
  $('#createPost').modal('toggle');
@endif

if (window.location.hash === '#create') {
    $('#createPost').modal('toggle');
} 

$('#createPost').on('hidden.bs.modal', function (e) {
    window.location.hash = '#';
}); 

$('#createPost').on('shown.bs.modal', function (e) {
    $("#title").focus();
    window.location.hash = '#create';
});

const deletePost = ( idPost ) => {    
    Swal.fire({
      title: '¿Seguro de borrar esta venta?',
      text: "¡No podrás revertir esto!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, borrarlo!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
              url: "{{ url('admin/posts') }}" + '/' + idPost,
              type: "DELETE",
              data: {
                  '_method': 'DELETE',
                  //'id': idPost,
                  '_token': csrf_token
              },
              success: function(respuesta) {
                    // tablaAlergenos.ajax.reload();
                    var ok= respuesta.ok;
                    if(ok){
                      Swal.fire(
                      'OK!',
                      respuesta.mensaje,
                      'success'
                    )
                   location.reload();
                    }else {
                      Swal.fire(
                      ':(',
                      respuesta.mensaje,
                      'error'
                    )
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
    })
}
</script>  