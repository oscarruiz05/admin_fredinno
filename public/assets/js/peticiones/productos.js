function editarProducto(id){
    $.ajax({
        url: '/productos/show/'+id,
        type: 'get',
        success: function(data){
            $('#update_product')[0].reset();
            $('#modal-update-producto').modal('show');
            // datos producto
            $('#id_producto').val(data.id);
            $('#codigo_edi').val(data.codigo);
            $('#nombre_edi').val(data.nombre);
            $('#precio_edi').val(data.precio);
        }
    });
}

// eliminar un producto
function elimnarProducto(id){
    $.ajax({
        url: '/productos/show/'+id,
        type: 'get',
        success: function(data){
            console.log(data)
            Swal.fire({
                title: 'Esta seguro?',
                text: "Esta apunto de eliminar este producto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, estoy seguro!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    deleted(id);
                }
            });
        }, error: function(e){
            console.log(e)
        }
    });
}

function deleted(id){
    $.ajax({
        url: '/productos/delete/'+id,
        type: 'post',
        success: function(data){
            Swal.fire(
                'Eliminado!',
                'El producto se ha eliminado.',
                'success'
            ).then((result) => {
                location.reload();
            });
        },error: function (e){
            console.log(e)
        }
    });
}
