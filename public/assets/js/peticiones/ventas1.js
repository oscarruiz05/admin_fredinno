$(document).ready(function () {
    // buscar producto
    $('#codigo').keyup(function(e){
        e.preventDefault();
        let producto = document.getElementById('codigo').value;
        let data = {id: producto};
        $.ajax({
            url: '/productos/get/product',
            type:'POST',
            success: function(data){
                console.log(data)
            }
        });

    });
    console.log('cargado')
});