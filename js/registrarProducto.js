function capturaDatosProducto(){
    var url = "registrarProducto.php";
    $.post(url,{sku:$("#txtsku").val(),
                codBarras:$("#txtcodigo_barras").val(),                
                nombre:$("#txtnombre").val(),
                descripcion:$("#txtdescripccion").val(),
                fecha:$("#txtfecha").val(),
                costo:$("#txtcosto").val(),
                precioMay:$("#txtprecioMay").val(),
                precioMen:$("#txtprecioMen").val(),
                cantidad:$("#txtcant").val(),
                categoria:$("#txtcategoria").val(),
                almacen:$("#Almacen").val(),
                provedor:$("#Proveedor").val()},
           function (data){       
            $("#respuesta").html(data);
    });
};