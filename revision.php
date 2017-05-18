<?php
$PATH='lib/';
session_start();
include $PATH.'Conexion.php';
include $PATH.'Usuario.php';

$oUsr=new Usuario();

$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['1234'];

if($oUsr->VerificaUsuario())
    $_SESSION['USR']=$oUsr;

header('Location:http://localhost:8081/proy2605');

?>
