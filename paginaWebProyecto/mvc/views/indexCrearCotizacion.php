
<meta charset="utf-8">
<title>Formulario crear cotización</title>
<h3>FORMULARIO CREAR COTIZACIÓN</h3>
<form id="CrearCotizacion" method="post" action="../controlador/controladorCotizacion.php">
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="codigo">Código</label>
        <div class="col-sm-10">
            <input class="form-control" name="codigo" id="codigo" type="text" maxlength="20" readonly value="8">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="fecha">Fecha:</label>
        <div class="col-sm-10">
            <input class="form-control" id="FechaRegistro" type="date" name="campoFechaRegistro" >
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="total">Total</label>
        <div class="col-sm-10">
            <input class="form-control" name="total" id="total" type="text" maxlength="20" placeholder="$100000">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="observaciones">Observaciones:</label>
        <div class="col-sm-10">
            <input class="form-control" name="observaciones" id="observaciones" type="text" maxlength="100" placeholder="Cotización Nueva">
        </div>
    </div>
    <hr>
    <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label" for="descuento">Descuento</label>
        <div class="col-sm-10">
            <input class="form-control" name="descuento" id="descuento" type="text" maxlength="20" placeholder="$50000">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="cliente">Cliente:</label>
        <div class="col-sm-10">
                <select>
                    <option value="tabla cliente">tabla cliente</option>
                </select>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="nit">NIT:</label>
        <div class="col-sm-10">
            <input class="form-control" name="nit" id="nit" type="text" maxlength="9" readonly value="NIT del cliente">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="telefono">Teléfono:</label>
        <div class="col-sm-10">
            <input class="form-control" name="telefono" id="telefono" type="text" maxlength="12" readonly value="Teléfono de contacto">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="direccion">Dirección:</label>
        <div class="col-sm-10">
            <input class="form-control" name="direccion" id="direccion" type="text" maxlength="20" readonly value="Dirección de entrega">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label" for="email">E-mail:</label>
        <div class="col-sm-10">
            <input class="form-control" name="email" id="email" type="text" maxlength="20" readonly value="E-mail de contacto">
        </div>
    </div>
    <hr>
                              <button class="btn btn-theme" id="Registrar">Registrar  </button>
</form>

<?php
if (isset($_GET['res'])){
    echo $_GET['res'];
}
?>