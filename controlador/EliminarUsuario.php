<?php
require_once('../Modelo/Usuarios.php');
if ($_GET){
    $ModeloUsuario=new Usuarios();
    $estado=$_GET["estado"];
    $id=$_GET["id"];
    $ModeloUsuario->ActualizarE($id,$estado);
    session_start();
    $_SESSION['msj'] ="error";
    
}else{
    header('Location:../Vista/coUs_cordi.php.php');
}
?>