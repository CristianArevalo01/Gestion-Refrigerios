<?php
require_once('../Modelo/Cursos.php');
if ($_POST){
    $ModeloCurso=new Cursos();
    $curso=$_POST["curso"];
    $cantidad=$_POST["cantidad"];
    $profesor=$_POST["profesor"];
    $estado=$_POST["estado"];
    $jornada=$_POST["jornada"];
    $ModeloCurso->Agregar($curso,$cantidad,$profesor,$estado,$jornada);
    session_start();
    $_SESSION['msj'] ="error";

}else{
    session_start();
    $_SESSION['msj'] ="error";
    header('Location:../Vista/coCur_cordi.php');
}
?>