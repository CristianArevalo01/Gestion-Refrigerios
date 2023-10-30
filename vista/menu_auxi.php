<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/EstiloMenuC.css">
</head>
<body>
    <?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    if(isset($_SESSION['msj'])){
        $respuesta = $_SESSION['msj']; ?>
        <script>
         alert("Su acción fue EXITOSA")
        </script>
    <?php
    unset($_SESSION['msj']);
    }
    ?>
    <div class="right-section">
        <div class="nav_2">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                </span>
            </button>

            <div class="profile">
                <div class="info">
                    <p>Bienvenido, <b><?php echo " ".$_SESSION['nombre']."   "?></b></p>
                    <small class="text-muted">Auxiliar</small>
                </div>
                <div class="profile-photo">
                    <img src="">
                </div>
            </div>
        </div>
    </div>

    <nav class="nav">
        
        <ul class="list">

            <div class="logo">
                    <img src="img/logo.jpg" class="logo_cole">
                    <h2>Colegio <span class="danger">Rafael <br> Uribe</span></h2>
                </div>
            
            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                    <img src="assets/usu.svg" class="list_img">
                    <a href="menu_auxi.php" class="nav_link">Usuario</a>
                    <img src="assets/flecha.svg" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="coUs_auxi.php" class="nav_link nav_link--inside">Consultar</a>
                    </li>

                </ul>
            </li>

            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                    <img src="assets/refri.svg" class="list_img">
                    <a href="" class="nav_link">Refrigerios</a>
                    <img src="assets/flecha.svg" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="menu_auxi_refri.php" class="nav_link nav_link--inside">Registrar</a>
                    </li>
                    <li class="list_inside">
                        <a href="coRefri_auxi.php" class="nav_link nav_link--inside">Consultar</a>
                    </li>
                </ul>
            </li>

            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                    <img src="assets/curso.svg" class="list_img">
                    <a href="" class="nav_link">Curso</a>
                    <img src="assets/flecha.svg" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="coCur_auxi.php" class="nav_link nav_link--inside">Consultar</a>
                    </li>
                </ul>
            </li>

            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                <img src="assets/report.svg" class="list_img">
                    <a href="" class="nav_link">Reporte</a>
                    <img src="assets/flecha.svg" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="reporteU.php" class="nav_link nav_link--inside">Usuarios</a>
                    </li>
                    <li class="list_inside">
                        <a href="reporteR.php" class="nav_link nav_link--inside">Refrigerios</a>
                    </li>
                    <li class="list_inside">
                        <a href="reporteC.php" class="nav_link nav_link--inside">Cursos</a>
                    </li>
                </ul>
            </li>

            <li class="list_item">
                <div class="list_button_">
                    <img src="assets/puerta.svg" class="list_img">
                    <a href="../Controlador/saliR.php" class="nav_link">Salir</a>
                </div>
            </li>
        </ul>
    </nav>

    <script src="java/menuC.js"></script>
</body>
</html>