<?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    require_once('../Modelo/Cursos.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Cursos();
    $model->id=$_GET["id"];
    $Curso=$model->Obtener($model->id);
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
            <h1 id="title">Actualizar Curso</h1>
            <?php
            if ($Curso!=null){
                foreach($Curso as $datos) {
            ?>
        <form action="../controlador/EditarCurso.php" method="POST" encytype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>" />
            <div class="input-group">
                <div class="input-field">
                    <input type="number" placeholder="Cantidad" required name="cantidad" value="<?php echo $datos["cantidad"]; ?>" >
                </div>
                <div class="input-field">
                    <select name="profesor" required>
                        <option <?php echo $datos["profesor"] == 1 ? 'selected' : ''; ?> value="Sandra Olarte">Sandra Olarte</option>
                        <option <?php echo $datos["profesor"] == 2 ? 'selected' : ''; ?> value="Gloria Aldana">Gloria Aldana</option>
                        <option <?php echo $datos["profesor"] == 3 ? 'selected' : ''; ?> value="Eduviges Camelo">Eduviges Camelo</option>
                        <option <?php echo $datos["profesor"] == 4 ? 'selected' : ''; ?> value="Narda Monroy">Narda Monroy</option>
                        <option <?php echo $datos["profesor"] == 5 ? 'selected' : ''; ?> value="Fanny Roa">Fanny Roa</option>
                        <option <?php echo $datos["profesor"] == 6 ? 'selected' : ''; ?> value="Lida Guitierrez">Lida Guitierrez</option>
                        <option <?php echo $datos["profesor"] == 7 ? 'selected' : ''; ?> value="Martha Alfonso">Martha Alfonso</option>
                        <option <?php echo $datos["profesor"] == 8 ? 'selected' : ''; ?> value="Carolina Marin">Carolina Marin</option>
                        <option <?php echo $datos["profesor"] == 9 ? 'selected' : ''; ?> value="Marisol Ramirez">Marisol Ramirez</option>
                        <option <?php echo $datos["profesor"] == 10 ? 'selected' : ''; ?> value="Felipe Renteria">Felipe Renteria</option>
                        <option <?php echo $datos["profesor"] == 11 ? 'selected' : ''; ?> value="Patricia Cardozo">Patricia Cardozo</option>
                        <option <?php echo $datos["profesor"] == 12 ? 'selected' : ''; ?> value="Neida Monroy">Neida Monroy</option>
                        <option <?php echo $datos["profesor"] == 13 ? 'selected' : ''; ?> value="Ximena Martinez">Ximena Martinez</option>
                        <option <?php echo $datos["profesor"] == 14 ? 'selected' : ''; ?> value="Karen Herrera">Karen Herrera</option>
                        <option <?php echo $datos["profesor"] == 15 ? 'selected' : ''; ?> value="Carlos Lozano">Carlos Lozano</option>
                        <option <?php echo $datos["profesor"] == 16 ? 'selected' : ''; ?> value="Jairo Bravo">Jairo Bravo</option>
                        <option <?php echo $datos["profesor"] == 17 ? 'selected' : ''; ?> value="Smith Hinestroza">Smith Hinestroza</option>
                        <option <?php echo $datos["profesor"] == 18 ? 'selected' : ''; ?> value="Milena Beltran">Milena Beltran</option>
                        <option <?php echo $datos["profesor"] == 19 ? 'selected' : ''; ?> value="Jefferson Torres">Jefferson Torres</option>
                        <option <?php echo $datos["profesor"] == 20 ? 'selected' : ''; ?> value="Leonardo Salamanca">Leonardo Salamanca</option>
                        <option <?php echo $datos["profesor"] == 21 ? 'selected' : ''; ?> value="Emperatris">Emperatris</option>
                        <option <?php echo $datos["profesor"] == 22 ? 'selected' : ''; ?> value="Jenny Gomez">Jenny Gomez</option>
                        <option <?php echo $datos["profesor"] == 23 ? 'selected' : ''; ?> value="Richard Guitierrez">Richard Guitierrez</option>
                        <option <?php echo $datos["profesor"] == 24 ? 'selected' : ''; ?> value="Lilian Rojas">Lilian Rojas</option>
                        <option <?php echo $datos["profesor"] == 25 ? 'selected' : ''; ?> value="Adriana Tafur">Adriana Tafur</option>
                        <option <?php echo $datos["profesor"] == 26 ? 'selected' : ''; ?> value="Victor Ardila">Victor Ardila</option>
                        <option <?php echo $datos["profesor"] == 27 ? 'selected' : ''; ?> value="Yolanda Zamora">Yolanda Zamora</option>
                        <option <?php echo $datos["profesor"] == 28 ? 'selected' : ''; ?> value="Carlos Caro">Carlos Caro</option>
                        <option <?php echo $datos["profesor"] == 29 ? 'selected' : ''; ?> value="Miguel Caro">Miguel Caro</option>
                        <option hidden selected>Profesor</option>
                    </select>
                </div>
                <div class="input-field">
                    <select name="estado" required>
                        <option <?php echo $datos["estado"] == 1 ? 'selected' : ''; ?>value="activo">Activo</option>
                        <option <?php echo $datos["estado"] == 2 ? 'selected' : ''; ?>value="inactivo">Inactivo</option>
                        <option hidden selected>Estado</option>
                    </select>
                </div>
                <div class="input-field">
                    <select name="jornada" required>
                        <option <?php echo $datos["jornada"] == 1 ? 'selected' : ''; ?>value="mañana">mañana</option>
                        <option <?php echo $datos["jornada"] == 2 ? 'selected' : ''; ?>value="tarde">tarde</option>
                        <option hidden selected>Jornada</option>
                    </select>
                </div>

                <div class="btn-field">
                    <button name= "registar" type= "submit" onclick="mostrar()">Actualizar</button>
                    <script type="text/javascript">

                        function mostrar(){

                            swal("Exito","Su acción fue exitosa","success");
                        }
                    </script>
                        

                    <button type="reset" name="Borrar" value="Borrar" onclick="editCur_cordi.php">Borrar</button>
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