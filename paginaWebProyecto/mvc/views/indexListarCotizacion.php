
<meta charset="utf-8">
<title>Formulario listar cotización</title>
<h3>FORMULARIO LISTAR COTIZACIÓN</h3>
<form id="ListarCotizacion" method="post" action="../controlador/controladorCotizacion.php">
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="codigo">Código</label>
        <div class="col-sm-10">
            <input class="form-control" name="codigo" id="codigo" type="text" maxlength="20" placeholder="100501">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="NitCliente">Nit del Cliente</label>
        <div class="col-sm-10">
            <input class="form-control" name="NitCliente" id="NitCliente" type="text" maxlength="20" placeholder="204">
        </div>
    </div>
    <hr>
    <button class="btn btn-theme" id="Buscar">Buscar</button>
    <button class="btn btn-theme" id="MirarTodo">Listar mis cotizaciones</button>
</form>

<?php
if (isset($_GET['res'])){
    echo $_GET['res'];
}
?>
