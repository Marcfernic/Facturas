<?php
require("comun.php");
cabecera("Nueva venta");
?>
<body>
<div class="cuerpo">
    <form name="altas" method="post" action="ej_alta.php">
        <input type="hidden" name="IdPedido" id="IdPedido" value="<?php echo $_GET['IdPedido'] ?>"/>

        <table border="0" align="center">
            <tr>
                <td align="left">Producto:</td>
                <td>
                    <select name="IdProducto">
                        <?php

                        $dbh = openDB();
                        $sql = "Select IdProducto, NombreProducto, PrecioUnidad FROM productos";

                        //$resultado = mysql_query("Select IdProducto, NombreProducto, PrecioUnidad FROM productos", $c);
                        foreach ($dbh->query($sql) as $fila) {
                            ?>
                            <option value="<?php echo $fila['IdProducto'] ?>">
                                <?php echo $fila['NombreProducto'] ?> (PVP <?php echo $fila['PrecioUnidad'] ?> Eur.)
                            </option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td align="left">Precio Unidad:</td>
                <td><input type="text" name="PrecioUnidad" id="PrecioUnidad"/></td>
            </tr>
            <tr>
                <td align="left">Cantidad:</td>
                <td><input type="text" name="Cantidad" id="Cantidad"/></td>
            </tr>
        </table>
        <br/>
        <input type="hidden" name="idPedido" value="<?php echo $_GET['IdPedido'] ?>">
        <input type="submit" value="Enviar"/>&nbsp;<input type="reset" value="Reestablecer"/>
    </form>
</div>
<?php
pie();
?>
