<!DOCTYPE html>
<html lang="en">
<head>
    <!-- cadena de caracteres para el uso de letra ñ -->
    <meta charset="UTF-8">
      <!-- para definir carcateristicas de acuerdo al tamaño de la pantalla y su escala-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/EstiloMenuC.css">
    <link rel="stylesheet" href="css/stil.css">
</head>
<body>
    <?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    require_once('../Modelo/Refrigerios.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Refrigerios();
    ?>
    <div class="perfil-formu">
    <div class="perfil">
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
        </div>
        <div class="formu">
    <div class="container_refri">
        <div class="form-content_refri">
            <h1 id="title">Registro de Refrigerio</h1>
            <form action="../controlador/AgregarRefrigerio.php" method="post">
            <div class="input-group">
                <div class="input-field">
                    <input type="date" placeholder="fecha" required name="fecha">
                </div>
                <div class="input-field">
                    <input type="time" placeholder="Hora de llegada" required name="hora">
                </div>
                <div class="input-field">
                <select name="tipo"placeholder="Tipo de Refrigerio" required name="tipo">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option hidden selected>Tipo de Refrigerio</option>
                    </select>
                </div>
                <div class="input-field" >
                    <textarea class="refri"  type="textarea" placeholder="Descripcion Del Refrigerio" required name="descripcion"></textarea>
                </div>
                    <div class="input-field">
                        <input type="number" placeholder="Cantidad" required name="cantidad">
                </div>
                <div class="input-field">
                    <select placeholder="Estado" required name="estado">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        <option hidden selected>Estado</option>
                    </select>
                
                </div>
                <div class="input-field">
                    <select placeholder="Auxiliar" required name="idauxi">
                        <option value="1">Santiago</option>
                        <option value="3">Jaider</option>
                        <option value="5">Michel</option>
                        <option value="7">Paula</option>
                        <option hidden selected>Auxiliar</option>
                    </select>
                </div>
                <div class="input-field">
                    <select placeholder="Coordinador" required name="idcoor">
                        <option value="2">Cristian</option>
                        <option value="3">Fernanda</option>
                        <option hidden selected>Coordinador</option>
                    </select>
                </div>
                <div class="btn-field">
                    <button name= "registar" type= "submit" onclick="mostrar()" >Registrar</button>
                    <button type="reset" name="Borrar" value="Borrar" onclick="menu_curso.html">Borrar</button>
                </div>
            </div>
        </form>
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
                        <a href="coUs_cordi.php" class="nav_link nav_link--inside">Consultar</a>
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