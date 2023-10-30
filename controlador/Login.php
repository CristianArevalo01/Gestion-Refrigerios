
<?php
session_start();
require_once('../Modelo/login.php');
    if ($_POST){
        $Usuario = $_POST['User'];
        $Password = $_POST['Pass'];
        //SE CREA UNA VARIABLE PARA RECIBIR LO QUE DEVUELVE LA FUNCION LOGIN DEL MODELO
        $model = new Login();
        $entrada= $model->login($Usuario, $Password);
        if ($entrada != false){
            //SI EXISTE EL USUARIO, LO REDIRIGE A LA VISTA DE MENU DE ACUERDO AL ROL
            $model-> validateSessionAdmin();
            //header ('Location: ../vista/menu.php');
        }
        //SI NO EXISTE EL USUARIO VUELVE A MOSTRAR LA VISTA LOGIN
        else {
            $_SESSION['msj'] ="error";
            header ('Location: ../vista/login.php'); 
        }
    }
    ?>
