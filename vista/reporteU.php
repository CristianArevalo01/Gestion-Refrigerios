<?php
//SE INCLUYEN LOS ARCHIVOS NECESARIOS PARA LA ELABORACION DEL FORMULARIO
require('fpdf/fpdf.php');
require('../Modelo/Conexion.php');
require('../Modelo/Usuarios.php');
//CRAMOS UNA CLASE PARA PODER COLOCAR ENCABEZADO Y PIE DE PAGINA AL REPORTE
class PDF extends FPDF
{
//CABECERA DE PAGINA
function header() 
{
    //Se inserta un logo con alguna de las imagenes de la carpeta img
    $this->Image('img/logo.jpg',10,8,-300);
    //Arial bold 15
    $this->SetFont('Arial','B',18);
    //Movernos a la derecha
    $this->Cell(50);
    //Titulo
    $this->Cell(90,10,'REPORTE DE USUARIOS',1,0,'C');
    //Salto de linea
    $this->Ln(25);
}   
//Pie de pagina
function Footer()
{
    //Posicion: a 1,5 del final
    $this->SetY(-15);
    //Arial Italic 8
    $this->SetFont('Arial','I',8);
    //Numero de pagina
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
} 
//instanciamos un usuario para poder utilizar la funcion listar del modelo
$model= new Usuarios();
//instanciamos un elemento de la clase PDF para usar todos sus atributos y metodos
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
//Se crean las celdas con las que se va a trabajar para la creacion del reporte como si fueran celdas de una tabla
$pdf->Cell(1);
//Se colocan los encabezados de las columnas del reporte (se pueden agregar los que se necesiten)
//Cada celda tiene dentro de la funcion Cell
//ancho, alto, cadena a mostrar, borde, posicion de la celda, alineacion, fondo de celda
$pdf->Cell(8,10,utf8_decode('id'),1,0,'C',0);
$pdf->Cell(50,10,utf8_decode('Nombre'),1,0,'C',0);
$pdf->Cell(50,10,utf8_decode('Rol'),1,0,'C',0);
$pdf->Cell(50,10,utf8_decode('Estado'),1,0,'C',0);
$pdf->Cell(30,10,utf8_decode('Contraseña'),1,1,'C',0);

//Invocamos la funcion listar para que consulte en este caso los usuarios
$Usuario=$model->Listar();
if ($Usuario!=null){
    foreach($Usuario as $r){
        $pdf->Cell(1);
        $pdf->Cell(8,10,utf8_decode($r['id']),1,0,'C',0);
        $pdf->Cell(50,10,utf8_decode($r['nombre']),1,0,'C',0);
        $pdf->Cell(50,10,utf8_decode($r['rol']),1,0,'C',0);
        $pdf->Cell(50,10,utf8_decode($r['estado']),1,0,'C',0);
        $pdf->Cell(30,10,utf8_decode($r['contraseña']),1,1,'C',0);
    }
}
//Muestra el reporte en una ventana nueva del navegador
$pdf->Output();
?>