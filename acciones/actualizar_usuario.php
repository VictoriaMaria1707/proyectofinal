<?php
require_once("../clases/cls_usuario.php");
$usu = new usuario;

$usu->actualizar($_POST['txt_nombre'],$_POST['txt_usuario'],$_POST['txt_clave'],$_POST['txt_cod_usuario']);
    if ($usu)
    {
        echo "ACTUALIZADO correctamente";
        header('Location: ../vistas/frm_usuario.php');
    }
    else
    {
        echo "error";
    }
?>