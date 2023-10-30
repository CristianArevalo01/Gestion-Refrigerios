<?php
require_once('../Modelo/Cursos.php');
if ($_POST){
    $ModeloCurso=new Cursos();
    $id=$_POST["id"];
    $cantidad=$_POST["cantidad"];
    $profesor=$_POST["profesor"];
    $estado=$_POST["estado"];
    $jornada=$_POST["jornada"];
    $ModeloCurso->Actualizar($id,$cantidad,$profesor,$estado,$jornada);
    session_start();
    $_SESSION['msj'] ="error";
}else{
    header('Location:../Vista/Cursos.php');
}
?>