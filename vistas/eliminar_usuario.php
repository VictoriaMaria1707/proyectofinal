<?php
include_once("../clases/cls_usuario.php");
$usu= new usuario();
$row=$usu->consultar_dato($_GET["valor"]);
?>
<html>
<form id="form1" action="../acciones/eliminar_usuario.php" method="post">
    <br><br><br>
    <input type="text" id="txt_cod_usuario" name="txt_cod_usuario" value="<?php echo $row["cod_usuario"];?>"/>
    <br><br>
    &ensp;&ensp;&ensp; <label for="txt_nombre" >Nombre</label>
    <input type="text" id="txt_nombre" name="txt_nombre" required value="<?php echo $row["Nombre"];?>"/>
    <br><br>
    &ensp;&ensp;&ensp;<label for="txt_usuario">Usuarios</label>
    <input type="text" id="txt_usuario" name="txt_usuario" required value="<?php echo $row["Usuario"];?>"/>
    <br><br>
    &ensp;&ensp;&ensp;<label for="txt_clave">Clave</label>
    <input type="text" id="txt_clave" name="txt_clave" required value="<?php echo $row["Clave"];?>"/>
<br><br>
     &ensp;&ensp;&ensp;<button id="btn_insertar" type="submit">Eliminar</button>
</form>
    <br><br><br>

</html>
