<?php
require("comun.php");
cabecera("Seleccionar cliente");

?>
<div class="cuerpo">
  <form name="formulario" action="listado.php" method="post">
        <select name="clientes">
           <option value="HILARIoN-Abastos">
                   HILARIoN-Abastos           </option>
           <option value="Ernst Handel">
                   Ernst Handel           </option>
           <option value="Rattlesnake Canyon Grocery">
                   Rattlesnake Canyon Grocery           </option>
           <option value="Folk och f� HB">
                   Folk och f� HB           </option>
           <option value="Wartian Herkku">
                   Wartian Herkku           </option>
           <option value="Frankenversand">
                   Frankenversand           </option>
           <option value="White Clover Markets">
                   White Clover Markets           </option>
           <option value="QUICK-Stop">
                   QUICK-Stop           </option>
           <option value="Berglunds snabbk�p">
                   Berglunds snabbk�p           </option>
           <option value="Lehmanns Marktstand">
                   Lehmanns Marktstand           </option>
           <option value="Hungry Owl All-Night Grocers">
                   Hungry Owl All-Night Grocers           </option>
           <option value="Save-a-lot Markets">
                   Save-a-lot Markets           </option>
           <option value="Bon app'">
                   Bon app'           </option>
        </select>
        <input type="submit" value="Enviar">
  </form>
</div>
<?php
pie();
?>
