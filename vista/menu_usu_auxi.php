<?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/Login.php');
    require_once('../Modelo/Usuarios.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Usuarios();
    $Usuario=$model->Listar();
    $model->id=$_GET["id"];
    $Usuario=$model->Obtener($model->id);


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
            <h1 id="title">Actualizar Usuario</h1>
            <?php
            if ($Usuario!=null){
                foreach($Usuario     as $datos) {
            ?>
        <form action="../controlador/EditarUsuario.php" method="POST" encytype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>" />
            <div class="input-group">
                <div class="input-field">
                    <input type="text" placeholder="Nombre" required name="nombre" value="<?php echo $datos["nombre"]; ?>" >
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Contraseña" required name="contrasena" value="<?php echo $datos["contraseña"]; ?>">
                 </div>
                 <div class="input-field" >
                    <select name="rol" required>
                        <option <?php echo $datos["rol"] ==  2 ? 'selected' : ''; ?> value="auxiliar" selected>Auxiliar</option>
                        <option hidden >Rol</option>
                        </select>
                </div>
                <div class="input-field">
                    <select name="estado" required >
                        <option <?php echo $datos["estado"] == 1 ? 'selected' : ''; ?>value="activo" selected>Activo</option>
                        <option hidden>Estado</option>
                    </select>
                </div>
               
                <div class="btn-field">
                    <button name= "registar" type= "submit" onclick="mostrar()">Actualizar</button>
                    <script type="text/javascript">

                        function mostrar(){

                            swal("Exito","Su acción fue exitosa","success");
                        }
                    </script>
                        

                    <button type="reset" name="Borrar" value="Borrar" onclick="editUsu_cordi.php">Borrar</button>
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