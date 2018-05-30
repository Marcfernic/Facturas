<?php
require("comun.php");
cabecera("Salidas de los cruceros");
?>
<div class="cuerpo">

<!-- tabla con B.D. -->
<table id="t01">
<!-- Para sacar el nombre de los campos de la tabla -->
<tr>
<th>Noches</th>
<th>Puerto</th>
<th>País</th>
<th>Barco</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>
<?php

$vNoches = isset($_POST['noches']) ? $_POST['noches'] : '';
$vPuerto = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$vBarco = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$vPais = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$vFechaSalida = isset($_POST['fechaSalida']) ? $_POST['fechaSalida'] : null;

try {    
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    /*** echo a message saying we have connected ***/

    /*** The SQL SELECT statement ***/
    $sql = "SELECT * FROM `Cruceros.Itinerarios` JOIN `Cruceros.Puertos` JOIN `Cruceros.Barcos`"
            . "JOIN `Cruceros.Paises` JOIN `Cruzeros.Salidas` WHERE IdCliente LIKE '%$vIdCliente%'";
    foreach ($dbh->query($sql) as $row)
    { ?>
        <TR>
            <TD><?php print $row['IdCliente'] ?></TD>
            <TD><?php print $row['NombreCompany'] ?></TD>
            <TD><?php print $row['NombreContacto'] ?></TD>
            <TD><?php print $row['CargoContacto'] ?></TD>
            <TD><a hhref="verEtapas.php?codigoSalida=<?php echo $row['codigoSalida']; ?>">
                    <button name="verEtapas" value="verEtapas">Ver Etapas</button>
                </a>
               
            </TD>
        </TR>
           <?php }

    /*** close the database connection ***/
    $dbh = null;

}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>

<tr>
<td>7</td>
<td>Napoles</td>
<td>IT</td>
<td>PREZIOSA</td>
<td>2013-09-02</td>
<td><a href="verEtapas.php?codigoSalida=1">Ver etapas</a></td>
</tr>

<tr>
<td>7</td>
<td>Napoles</td>
<td>IT</td>
<td>PREZIOSA</td>
<td>2013-09-09</td>
<td><a href="verEtapas.php?codigoSalida=2">Ver etapas</a></td>
</tr>

<tr>
<td>7</td>
<td>Barcelona</td>
<td>ES</td>
<td>SPLENDIDA</td>
<td>2013-09-02</td>
<td><a href="verEtapas.php?codigoSalida=3">Ver etapas</a></td>
</tr>

<tr>
<td>7</td>
<td>Barcelona</td>
<td>ES</td>
<td>SPLENDIDA</td>
<td>2013-09-09</td>
<td><a href="verEtapas.php?codigoSalida=4">Ver etapas</a></td>
</tr>

<tr>
<td>7</td>
<td>Venecia </td>
<td>IT</td>
<td>DIVINA</td>
<td>2013-08-31</td>
<td><a href="verEtapas.php?codigoSalida=5">Ver etapas</a></td>
</tr>

<tr>
<td>7</td>
<td>Venecia </td>
<td>IT</td>
<td>DIVINA</td>
<td>2013-09-07</td>
<td><a href="verEtapas.php?codigoSalida=6">Ver etapas</a></td>
</tr>
<!-- Aquí terminan las filas de la tabla-->
</table>
</div>
<?php
pie();
?>
