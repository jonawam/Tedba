function capturaDatosEmpleado(){
    var valorF = document.getElementById("radFemenino").checked;
    var valorM = document.getElementById("radMasculino").checked;
    var s;
    
    if (valorF) {
      s="Femenino";
    } else if(valorM){
      s="Masculino";
    };

    var e = document.getElementById("selectSucursal");
    var strSucursal = e.options[e.selectedIndex].text;

    var url = "registrarEmpleado.php";
    $.post(url,{nombre:$("#txtNombre").val(),
                apellidos:$("#txtApellidos").val(),
                sexo:s,
                codEmp:$("#txtCodEmp").val(),
                telefono:$("#txtTelefono").val(),
                direccion:$("#txtDireccion").val(),
                sucursal: strSucursal},
           function (data){       
            $("#respuesta").html(data);
    });
};