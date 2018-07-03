<?php
require_once("../clases/cls_usuario.php");
$usu = new usuario;

$usu->insertar($_POST['txt_nombre'],$_POST['txt_usuario'],$_POST['txt_clave']);
    if ($usu)
    {
        echo "guardado";
        header('Location: ../vistas/frm_usuario.php');
    }
    else
    {
        echo "error";
    }
?>