<?php
require_once('../Modelo/Refrigerios.php');
if ($_GET){
    $ModeloUsuario=new Refrigerios();
    $estado=$_GET["estado"];
    $id=$_GET["id"];
    $ModeloUsuario->ActualizarE($id,$estado);
    session_start();
    $_SESSION['msj'] ="error";
}else{
    header('Location:../Vista/coRefri_cordi.php');
}
?>