<?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    require_once('../Modelo/Refrigerios.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Refrigerios();
    $model->id=$_GET["id"];
    $Refrigerio=$model->Obtener($model->id);
    if(isset($_SESSION['msj'])){
        $respuesta = $_SESSION['msj']; ?>
        <script>
         alert("Su acción feu EXITOSA")
        </script>
    <?php
    unset($_SESSION['msj']);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/EstiloMenuC.css">
        <link rel="stylesheet" href="css/stil.css">
        
        <title>Menu</title>
    </head>
    <body id="body-pd">
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
                    <small class="text-muted">Administrador</small>
                </div>
                <div class="profile-photo">
                    <img src="">
                </div>
            </div>
        </div>
    </div>
        </div>

        <div class="formu">
        <div class="container">
        <DIV class="form-content">
            <h1 id="title">Actualizar Refrigerio</h1>
            <?php
            if ($Refrigerio!=null){
                foreach($Refrigerio as $datos) {
            ?>
        <form action="../controlador/EditarRefrigerio.php" method="post" encytype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>" />
            <div class="input-group">
                <div class="input-field">
                    <input type="date" placeholder="Fecha" required name="fecha" value="<?php echo $datos["fecha"]; ?>" >
                </div>
                <div class="input-field">
                    <input type="time" placeholder="Hora de llegada" required name="hora" value="<?php echo $datos["hora"]; ?>" >
                </div>
                <div class="input-field">
                    <select name="tipo" required>
                        <option <?php echo $datos["tipo"] == 1 ? 'selected' : ''; ?> value="A">A</option>
                        <option <?php echo $datos["tipo"] == 2 ? 'selected' : ''; ?> value="B">B</option>
                        <option <?php echo $datos["tipo"] == 3 ? 'selected' : ''; ?> value="C">C</option>
                        <option <?php echo $datos["tipo"] == 4 ? 'selected' : ''; ?> value="D">D</option>
                        <option hidden selected>Tipo de Refrigerio</option>
                    </select>
                </div>
                <div class="input-field">
                    <input type="number" placeholder="Cantidad" required name="cantidad" value="<?php echo $datos["cantidad"]; ?>" >
                </div>
                <div class="input-field">
                    <input type="textarea" placeholder="Descripcion" required name="descripcion" value="<?php echo $datos["descripcion"]; ?>" >
                </div>
                <div class="input-field">
                    <select name="estado" required>
                        <option <?php echo $datos["estado"] == 1 ? 'selected' : ''; ?>value="activo">Activo</option>
                        <option <?php echo $datos["estado"] == 2 ? 'selected' : ''; ?>value="inactivo">Inactivo</option>
                        <option hidden selected>Estado</option>
                    </select>
                </div>
                <div class="input-field">
                    <select name="idauxi" required>
                        <option <?php echo $datos["id_auxiliar_fk"] == 1 ? 'selected' : ''; ?>value="1">santiago</option>
                        <option <?php echo $datos["id_auxiliar_fk"] == 2 ? 'selected' : ''; ?>value="3">jaider</option>
                        <option <?php echo $datos["id_auxiliar_fk"] == 3 ? 'selected' : ''; ?>value="5">Michel</option>
                        <option <?php echo $datos["id_auxiliar_fk"] == 4 ? 'selected' : ''; ?>value="7">Paula</option>
                        <option hidden selected>Auxiliar</option>
                    </select>
                </div>
                <div class="input-field">
                    <select name="idcoor" required>
                        <option <?php echo $datos["id_coordinador_fk"] == 1 ? 'selected' : ''; ?> value="2">Cristian</option>
                        <option <?php echo $datos["id_coordinador_fk"] == 2 ? 'selected' : ''; ?> value="4">Fernanda</option>
                        <option hidden selected>Coordinador</option>
                    </select>
                </div>
                <div class="btn-field">
                    <button name= "registar" type= "submit" >Actualizar</button>

                    <button type="reset" name="Borrar" value="Borrar" onclick="editRefri_cordi.php">Borrar</button>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </form>
    </DIV>
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
                    <a href="" class="nav_link">Usuarios</a>
                    <img src="assets/flecha.svg" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="menu_usu.php" class="nav_link nav_link--inside">Registrar</a>
                    </li>
                    <li class="list_inside">
                        <a href="coUs_cordi.php" class="nav_link nav_link--inside">Consultar</a>
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
                        <a href="menu_refri.php" class="nav_link nav_link--inside">Registrar</a>
                    </li>
                    <li class="list_inside">
                        <a href="coRefri_cordi.php" class="nav_link nav_link--inside">Consultar</a>
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
                        <a href="menu_curso.php" class="nav_link nav_link--inside">Registrar</a>
                    </li>
                    <li class="list_inside">
                        <a href="coCur_cordi.php" class="nav_link nav_link--inside">Consultar</a>
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
                    <a href="../Controlador/salir.php" class="nav_link">Salir</a>
                </div>
            </li>
        </ul>
    </nav>

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="java/menuC.js"></script>
    </body>
</html>