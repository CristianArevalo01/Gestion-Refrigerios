<?php
session_start();//SE INICIA SESION PARA EL CONTROL DE USUARIOS
require_once('conexion.php');
class Login {
    private $pdo; //variable para conexion
    //constructor
    public function __CONSTRUCT()
    {
        try //intentar
            {
                $this->pdo = Conexion::StartUp(); //SE CONECTA CON LA BASE DE DATOS A TRAVES DE LA FUNCION STARTUP
            }
        catch(Exception $e) //atrapar
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
}
//ESTA FUNCION CONSULTA EN LA TABLA USUARIO PASANDO COMO PARAMETROS EL USUARIO Y LA CONTRASEÑA
public function login($Usuario, $Password){
    //stm es una variable
    $stm= $this->pdo->prepare("SELECT * FROM usuario WHERE nombre = :UserU AND contraseña = :PasswordU");
    //bindParam en una funcion
    $stm->bindParam(':UserU',$Usuario);
    $stm->bindParam(':PasswordU',$Password);
    $stm->execute();
    //rouwCount es un contador de filas
    if ($stm->rowCount()==1){
        $result = $stm->fetch();
        //fetch es un arreglo de los campos select *
        //SE INICIA LA VARIABLE $_SESSION PARA TOMAR DATOS DE LA BASE EN EL ARREGLO RESULT
        $_SESSION['nombre']=$result["nombre"];
        $_SESSION['rol']=$result["rol"];
        $_SESSION['id']=$result['id'];
        //DEVUELVE EL ID PARA SABER SI ENCONTRO AL USUARIO
        return $result['id'];
    }
    //DE LO CONTRARIO DEVUELVE FALSO
    return false;
}
public function validateSession(){
    if ($_SESSION['nombre']==null){
        header('Location: ../vista/login.php'); //el header se encarga de cargar una vista
    }
}
public function validateSessionAdmin(){
    if ($_SESSION['rol']=="coordinador") {
        header('Location: ../vista/menu.php');
    }
    else {
        header('Location: ../vista/menu_auxi.php');
    }
}

public function getIdUsuario(){
    return $_SESSION['id'];
}
}
?>