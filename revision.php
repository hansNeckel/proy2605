<?php
$PATH='lib/';
include $PATH.'Conexion.php';
include $PATH.'Usuario.php';

$oUsr=new Usuario();

$oUsr->nombre='flopez';
$oUsr->clave='1234';

if($oUsr->VerificaUsuario())
    echo "Existe";
else
    echo "No existe";
    
/*session_start();
var_dump($_SESSION);*/
?>
