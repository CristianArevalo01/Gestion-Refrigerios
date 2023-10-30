<?php
require_once('../Modelo/Usuarios.php');
if ($_POST){
    $ModeloUsuario=new Usuarios();
    $nombre=$_POST["nombre"];
    $contrasena=$_POST["contrasena"];
    $rol=$_POST["rol"];
    $estado=$_POST["estado"];
    $id=$_POST["id"];
    $ModeloUsuario->Actualizar($id,$nombre,$contrasena,$rol,$estado);
    session_start();
    $_SESSION['msj'] ="error";
}else{
    header('Location:../Vista/Usuarios.php');
}
?>