document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('nombre-producto').addEventListener('change', (e) => {
        let producto = document.getElementById('nombre-producto').value;
        let data = {id: producto};

        fetch('/productos/get/product', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers:{
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log(response);

        });
    });
});

document.getElementById('agregar-producto').addEventListener('submit', addproducto);
function addproducto(e){
    let codigo = document.getElementById('codigo').value;
    let nombre = document.getElementById('nombre-producto').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio_unt = document.getElementById('precio-unt').value;
    let precio = document.getElementById('precio').value;
    let cantidad_global = document.getElementById('cantidad_gobal').value;
    let total = document.getElementById('total').value;
    let total_global = document.getElementById('total_global');

    const producto = {
        codigo,
        nombre,
        cantidad,
        precio_unt,
        precio
    };
    let productos = [producto];
    document.getElementById('agregar-producto').reset();
    e.preventDefault();
    console.log(productos)

    let productosview = document.getElementById('ver-producto');
    productos.forEach(item => {
        productosview.innerHTML += `
            <tr>
                <td class="text-center">
                    <a href="#"><strong>${item.codigo}</strong></a>
                    <input type="hidden" name="producto_${cantidad_global}" value="${item.nombre}" />
                </td>
                <td><a href="#"><strong>${item.nombre}</strong></a></td>
                <td class="text-center">
                    <strong>${item.cantidad}</strong>
                    <input type="hidden" name="cantidad_${cantidad_global}" value="${item.cantidad}" />
                </td>
                <td class="text-right">$${item.precio_unt}</td>
                <td class="text-right">$${item.precio}</td>
                <td class="text-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-primary" id="remover" onclick="rm_producto('${item.nombre}')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;

        total = total + (cantidad * precio_unt);
        console.log(total)
    });

    document.getElementById('total').value = total;
    document.getElementById('cantidad_gobal').value = cantidad_global + 1;
}

