<?php
require("comun.php");
cabecera("Facturas de un cliente");
?>
<div class="cuerpo">

<!-- tabla con B.D. -->
<table align="center" border="1px">
<!-- Para sacar el nombre de los campos de la tabla -->
<tr>
<th>IdPedido</th>
<th>Fecha</th>
<th>Cliente</th>
<th>Acciones</th>
</tr>

<tr>
<td><a href="detalleFactura.php?IdPedido=10257">10257</a></td>
<td>2010-03-16</td>
<td>HILARIoN-Abastos</td>
<td><a href="alta.php?IdPedido=10257"><img src="imagenes/cart_add.jpg" alt="Nueva venta"></a></td>
</tr>

<tr>
<td><a href="detalleFactura.php?IdPedido=10395">10395</a></td>
<td>2010-08-26</td>
<td>HILARIoN-Abastos</td>
<td><a href="alta.php?IdPedido=10395"><img src="imagenes/cart_add.jpg" alt="Nueva venta"></a></td>
</tr>

<tr>
<td><a href="detalleFactura.php?IdPedido=10476">10476</a></td>
<td>2010-11-17</td>
<td>HILARIoN-Abastos</td>
<td><a href="alta.php?IdPedido=10476"><img src="imagenes/cart_add.jpg" alt="Nueva venta"></a></td>
</tr>

<tr>
<td><a href="detalleFactura.php?IdPedido=10486">10486</a></td>
<td>2010-11-26</td>
<td>HILARIoN-Abastos</td>
<td><a href="alta.php?IdPedido=10486"><img src="imagenes/cart_add.jpg" alt="Nueva venta"></a></td>
</tr>

<tr>
<td><a href="detalleFactura.php?IdPedido=10490">...</a></td>
<td>...</td>
<td>...</td>
<td><a href="alta.php?IdPedido=10490"><img src="imagenes/cart_add.jpg" alt="Nueva venta"></a></td>
</tr>



<!-- Aqu� terminan las filas de la tabla-->
</table>
</div>
<?php
pie();
?>
