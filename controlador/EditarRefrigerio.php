<?php
require_once('../Modelo/Refrigerios.php');
if ($_POST){
    $ModeloRefrigerio=new Refrigerios();
    $id=$_POST["id"];
    $fecha=$_POST["fecha"];
    $hora=$_POST["hora"];
    $tipo=$_POST["tipo"];
    $cantidad=$_POST["cantidad"];
    $descripcion=$_POST["descripcion"];
    $estado=$_POST["estado"];
    $idauxi=$_POST["idauxi"];
    $idcoor=$_POST["idcoor"];
    $ModeloRefrigerio->Actualizar($id,$fecha,$hora,$tipo,$cantidad,$descripcion,$estado,$idauxi,$idcoor);
    session_start();
    $_SESSION['msj'] ="error";
}else{
    header('Location:../Vista/Refrigerios.php');
}
?>