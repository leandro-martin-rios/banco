<?php 
require('../../backend/helpers/dolar.php');
$dolar = dolarBlue("compra");
?>

<h2>Valor del dolar a vender: <span id="valueUsdApi"><?php echo $dolar ?></span></h2>

<form action="../../backend/controllers/operationsController.php" method="POST">
        <label for="money">Ingrese su monto a cambiar a Pesos</label>
        <input type="number" step="0.01" name="money" id="money">

        <input type="hidden" name="valueUsd" id="valueUsd" value="<?php echo $dolar ?>">

        <input type="submit" id="btnInputSubmit" name="changeUsd" value="Enviar">
</form>