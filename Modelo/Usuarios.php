<?php
require_once('conexion.php');
require_once('login.php');
class Usuarios{
    private $pdo;//VARIABLE PARA CONEXION
    public $id;
    public $nombre;
    public $contrasena;
    public $rol;
    public $estado;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::StartUp(); //SE CONECTA CCON LA BASE DE DATOS A TRAVES DE LA FUNCION STARTUP
        } 
        catch (Exception $e)
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }
    public function Listar(){
        $rows=null;
        $stm=$this->pdo->prepare("CALL sp_buscaTodoU();");
        if($stm->execute()){
            return $stm->fetchAll();
        }
    }
    public function obtener($id){
        $rows=null;
        $stm=$this->pdo->prepare("CALL sp_busporidU(:id);");
        $stm->bindParam(':id',$id);
        $stm->execute();
        while ($result=$stm->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
    public function obtenerAux($id){
        $rows=null;
        $stm=$this->pdo->prepare("CALL sp_buscaridA(:id);");
        $stm->bindParam(':id',$id);
        $stm->execute();
        while ($result=$stm->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
    public function Agregar($nombre,$contrasena,$rol,$estado){
        $stm=$this->pdo->prepare("CALL sp_insertarusuario(:nombre,:rol,:estado,:contrasena)");
        $stm->bindParam(':nombre',$nombre);
        $stm->bindParam(':rol',$rol);
        $stm->bindParam(':estado',$estado);
        $stm->bindParam(':contrasena',$contrasena);
        if ($stm->execute()){
            header('Location:../Vista/coUs_cordi.php'); //El header carga una ubicacion
        }else {
            header('Location:../Vista/menu_usu.php');
        }
    }
     //METODO PARA ACTUALIZAR USUARIO
     public function Actualizar($id,$nombre,$contrasena,$rol,$estado){
        $stm=$this->pdo->prepare("call sp_actualizarusuario(:id,:nombre,:contrasena,:rol,:estado)");
        $stm->bindParam(':id',$id);
        $stm->bindParam(':nombre',$nombre);
        $stm->bindParam(':contrasena',$contrasena);
        $stm->bindParam(':rol',$rol);
        $stm->bindParam(':estado',$estado);
        if ($stm->execute()){
            $model= new Login();
            $model-> validateSessionAdmin();
            session_start();
            $_SESSION['msj'] ="error"; //El header carga una ubicacion
        }else {
            header('Location:../Vista/editUsu_cordi.php');
        }
    }
    //METODO PARA ELIMINAR UN USUARIO
    public function ActualizarE($id,$estado){
        $stm=$this->pdo->prepare("call sp_actualizarEstadoU(:id,:estado)");
        $stm->bindParam(':id',$id);
        $stm->bindParam(':estado',$estado);
        if ($stm->execute()){
            header('Location:../Vista/coUs_cordi.php'); //El header carga una ubicacion
        }else {
            header('Location:../Vista/eliUsu_cordi.php');
        }
    }
}
?>