 <style type="text/css"> 
     .divmodal{
         background-color: #80dfff;
         border-radius: 7px 7px 0px 0px;
         -moz-border-radius: 7px 7px 0px 0px;
         -webkit-border-radius: 7px 7px 0px 0px;
         border: 0px solid #000000;
     }
</style>

<form class="form" role="form" method="post" action="panel.php" accept-charset="UTF-8" id="login-nav">

    <div class="modal-header divmodal">

        <h3><span class="glyphicon glyphicon-log-in"></span><b> Iniciar Sesi&oacute;n</b></h3>
        
    </div>
    <div class="modal-body text-center">
                                    <label>Nombre de Usuario: </label><br>
                                    <input type="text" class="form-control" placeholder="Nombre de Usuario" aria-describedby="basic-addon1">
        <br>
                                    <label>Contrase&ntilde;a: </label><br>
                                    <input type="password" class="form-control" placeholder="Contrase&ntilde;a" aria-describedby="basic-addon1">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-info" onClick="cerrarModal()">
            <span class="glyphicon glyphicon-remove"></span> Cerrar
            </button>
        <button type="submit" class="btn btn-info" onClick="abrirAdmin()">Entrar</button>
    </div>
</form>