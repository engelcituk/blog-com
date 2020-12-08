
<script>

ClassicEditor
    .create( document.querySelector( '#ckeditor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );

    $('.select2').select2(); 

    let controls = {
                leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
                rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
            }

    // input group layout 
    $('#fechaPublicacion').datepicker(
        {
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls
        });

    // script para usar dropzone
    var miDropzone = new Dropzone(".dropzone", { 
        url: "/admin/posts/{{$post->url}}/images",
        dictDefaultMessage: "Arrastra aqui las fotos para subirlas",
        acceptedFiles:'image/*',
        maxFilesize: 2,
        paramName:'image',
        headers: {
            "X-CSRF-TOKEN":"{{csrf_token()}}"
        }
        });
        miDropzone.on('error', function(file, respuesta) {
            var mensaje = respuesta.image[0];
            $('.dz-error-message:last > span').text(mensaje);
        });

        Dropzone.autoDiscover= false;

    function deleteImagePost(idImagePost){
      var csrf_token = $('meta[name="csrf-token"]').attr('content');     
      Swal.fire({
        title: '¿Seguro de borrar la foto para este post?',
        text: "¡No podrás revertir esto!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrarlo!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
                url: "{{ url('/admin/posts/images/delete') }}",
                type: "DELETE",
                data: {
                    '_method': 'DELETE',
                    'idImage': idImagePost,
                    '_token': csrf_token
                },
                success: function(respuesta) {
                  msg= respuesta.mensaje;
                  //showNotification('top','right','success', msg);
                  setTimeout(function(){
                      location.reload();
                  },3000);          
                },
                error: function(respuesta) {
                  msg= respuesta.mensaje;
                  //showNotification('top','right','danger', msg);
                }
            });
        }
      });
    }
</script>
