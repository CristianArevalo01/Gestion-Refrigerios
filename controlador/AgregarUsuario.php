<?php
require_once('../Modelo/Usuarios.php');
if ($_POST){
    $ModeloUsuario=new Usuarios();
    $nombre=$_POST["nombre"];
    $contrasena=$_POST["contrasena"];
    $rol=$_POST["rol"];
    $estado=$_POST["estado"];
    $ModeloUsuario->Agregar($nombre,$contrasena,$rol,$estado);
    session_start();
    $_SESSION['msj'] ="error";
    
}else{
    header('Location:../Vista/coUs_cordi.php');
}
?>