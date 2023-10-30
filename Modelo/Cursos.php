<?php
require_once('conexion.php');
class Cursos{
    private $pdo;//VARIABLE PARA CONEXION
    public $id;
    public $cantidad;
    public $profesor;
    public $estado;
    public $jornada;

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
        $stm=$this->pdo->prepare("call sp_buscaTodoCur();");
        if($stm->execute()){
            return $stm->fetchAll();
        }
    }
    public function obtener($id){
        $rows=null;
        $stm=$this->pdo->prepare("CALL sp_buscaridCr(:id);");
        $stm->bindParam(':id',$id);
        $stm->execute();
        while ($result=$stm->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function Agregar($id,$cantidad,$profesor,$estado,$jornada){
        $stm=$this->pdo->prepare("CALL sp_insertarCr(:id,:cantidad,:profesor,:estado,:jornada);");
        $stm->bindParam(':id',$id);
        $stm->bindParam(':cantidad',$cantidad);
        $stm->bindParam(':profesor',$profesor);
        $stm->bindParam(':estado',$estado);
        $stm->bindParam(':jornada',$jornada);
        if ($stm->execute()){
            header('Location:../Vista/coCur_cordi.php'); //El header carga una ubicacion
        }else {
            header('Location:../Vista/menu_curso.php');
        }
    }
    public function Actualizar($id,$cantidad,$profesor,$estado,$jornada){
        $stm=$this->pdo->prepare("CALL sp_actualizarCr(:id,:cantidad,:profesor,:estado,:jornada)");
        $stm->bindParam(':id',$id);
        $stm->bindParam(':cantidad',$cantidad);
        $stm->bindParam(':profesor',$profesor);
        $stm->bindParam(':estado',$estado);
        $stm->bindParam(':jornada',$jornada);
        if ($stm->execute()){
            header('Location:../Vista/coCur_cordi.php'); //El header carga una ubicacion
        }else {
            throw new Exception("Error al actualizar el curso.");
        }
    }

    public function ActualizarE($id,$estado){
        $stm=$this->pdo->prepare("call sp_actualizarEstadoC(:id,:estado);");
        $stm->bindParam(':id',$id);
        $stm->bindParam(':estado',$estado);
        if ($stm->execute()){
            header('Location:../Vista/coCur_cordi.php'); //El header carga una ubicacion
        }else {
            header('Location:../Vista/cordi.php');
        }
    }

}
?>