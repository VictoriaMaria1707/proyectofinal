<?php
require_once("../clases/cls_usuario.php");
$usu = new usuario;

$usu->eliminar($_GET['valor']);
    if ($usu)
    {
        echo "Eliminado correctamente";
        header('Location: ../vistas/frm_usuario.php');
    }
    else
    {
        echo "error";
    }
?>