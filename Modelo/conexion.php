<?php
class conexion{  //creamos la clase conexion

    public static function StartUp() //StartUp es un metodo. En la clase
    //estática ya no es necesario instanciarla para poder usar sus métodos
    {
        //Linea 8 inicializamos la VARIABLE PDO PARA CONECTARSE con la base de datos
        // obejeto de la clase lo constryo con los siguiente. 1.Servidor(mysql y Xampp servidor web local) 
        //2. Nombre de la base de datos y  Codificación de caracteres para aceptar letras como la ñ
        //3. Usuario y contraseña de la base de datos 
        $pdo = new PDO('mysql:host=localhost;dbname=refrigerios;charset=utf8','root','');
        //PDO ES UN OBJETO DE LA CLASE (instanciar es crear un objeto a partir deuna clase)

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        //ESTABLECE ATRIBUTOS PARA EL REPORTE DE ERRORES Y EL LANZAMIENTO DE EXCEPCIONES

        return $pdo;
        //El return se utiliza para terminar la ejecucion y retornar la varible pdo
    }
}
?>