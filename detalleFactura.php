<?php
require("comun.php");
cabecera("Detalle de una factura");
?>
<div class="cuerpo">

<!-- tabla con B.D. -->
<table align="center" border="1px">

<tr>
<th>IdPedido</th>
<th>Producto</th>
<th>Precio Unidad</th>
<th>Cantidad</th>
<th>Subtotal</th>
</tr>
    <!-- Aquí empiezan las filas de la tabla-->
<tr>
<td>10257</td>
<td>Chocolate Schoggi</td>
<td>35.1</td>
<td>25</td>
<td>877.5</td>
</tr>

<tr>
<td>10257</td>
<td>Licor verde Chartreuse</td>
<td>14.4</td>
<td>6</td>
<td>86.4</td>
</tr>

<tr>
<td>10257</td>
<td>Salsa verde original Frankfurter</td>
<td>10.4</td>
<td>15</td>
<td>156</td>
</tr>

<!-- Aquí terminan las filas de la tabla-->
</table>
</div>
<?php
pie();
?>
