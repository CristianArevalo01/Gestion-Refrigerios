<?php
require_once('../Modelo/Cursos.php');
if ($_GET){
    $ModeloUsuario=new Cursos();
    $estado=$_GET["estado"];
    $id=$_GET["id"];
    $ModeloUsuario->ActualizarE($id,$estado);
    session_start();
    $_SESSION['msj'] ="error";
}else{
    header('Location:../Vista/coCur_cordi.php');
}
?>