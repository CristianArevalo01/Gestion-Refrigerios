<?php
require_once('conexion.php');
require_once('login.php');
class Refrigerios{
    private $pdo;//VARIABLE PARA CONEXION
    public $id;
    public $fecha;
    public $hora;
    public $tipo;
    public $cantidad;
    public $descripcion;
    public $estado;
    public $idcoor;
    public $idauxi;

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
        $stm=$this->pdo->prepare("CALL sp_buscaTodoR");
        if($stm->execute()){
            return $stm->fetchAll();
        }
    }
    public function obtener($id){
        $rows=null;
        $stm=$this->pdo->prepare("CALL sp_buscaridR(:id);");
        $stm->bindParam(':id',$id);
        $stm->execute();
        while ($result=$stm->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function Agregar($fecha,$hora,$tipo,$cantidad,$descripcion,$estado,$idcoor,$idauxi){
        $stm=$this->pdo->prepare(" CALL sp_insertarR(:fecha,:hora,:tipo,:cantidad,:descripcion,:estado,:id_coordinador_fk,:id_auxiliar_fk)");
        $stm->bindParam(':fecha',$fecha);
        $stm->bindParam(':hora',$hora);
        $stm->bindParam(':tipo',$tipo);
        $stm->bindParam(':cantidad',$cantidad);
        $stm->bindParam(':descripcion',$descripcion);
        $stm->bindParam(':estado',$estado);
        $stm->bindParam(':id_coordinador_fk',$idcoor);
        $stm->bindParam(':id_auxiliar_fk',$idauxi);
        if ($stm->execute()){
            session_start();
            $_SESSION['msj'] ="error";
            $model= new Login();
            $model-> validateSessionAdmin(); //El header carga una ubicacion
        }else {
            header('Location:../Vista/menu_refri.php');
        }
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
    
    public function Actualizar($id,$fecha,$hora,$tipo,$cantidad,$descripcion,$estado,$idauxi,$idcoor){
        $stm = $this->pdo->prepare("CALL sp_actualizarR (:id, :fecha, :hora, :tipo, :descripcion, :cantidad, :estado, :id_auxiliar_fk, :id_coordinador_fk)");
        $stm->bindParam(':id', $id);
        $stm->bindParam(':fecha', $fecha);
        $stm->bindParam(':hora', $hora);
        $stm->bindParam(':tipo', $tipo);
        $stm->bindParam(':descripcion', $descripcion);
        $stm->bindParam(':cantidad', $cantidad);
        $stm->bindParam(':estado', $estado);
        $stm->bindParam(':id_auxiliar_fk', $idauxi);
        $stm->bindParam(':id_coordinador_fk', $idcoor);
        if ($stm->execute()){
            header('Location:../Vista/coRefri_cordi.php'); //El header carga una ubicacion
        }else {
            header('Location:../Vista/menu_refri.php');
        }
    }
        //METODO PARA ELIMINAR UN USUARIO
        public function ActualizarE($id,$estado){
            $stm=$this->pdo->prepare("call sp_actualizarEstadoR(:id,:estado)");
            $stm->bindParam(':id',$id);
            $stm->bindParam(':estado',$estado);
            if ($stm->execute()){
                header('Location:../Vista/coRefri_cordi.php'); //El header carga una ubicacion
            }else {
                header('Location:../Vista/cordi.php');
            }
        }
}
?>