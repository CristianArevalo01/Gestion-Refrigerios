<?php
require_once('../Modelo/Refrigerios.php');
if ($_POST){
    $ModeloRefrigerio=new Refrigerios();
    $fecha=$_POST["fecha"];
    $hora=$_POST["hora"];
    $tipo=$_POST["tipo"];
    $cantidad=$_POST["cantidad"];
    $descripcion=$_POST["descripcion"];
    $estado=$_POST["estado"];
    $idcoor=$_POST["idcoor"];
    $idauxi=$_POST["idauxi"];
    $ModeloRefrigerio->Agregar($fecha,$hora,$tipo,$cantidad,$descripcion,$estado,$idcoor,$idauxi);
    session_start();
    $_SESSION['msj'] ="error";
}else{ 
    session_start();
    $_SESSION['msj'] ="error";
    header('Location:../vista/coRefri_cordi.php');
}
?>