<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--vista del dispositivo y ancho de este y tamaño-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/EstiloMenuC.css">
        <link rel="stylesheet" href="css/stil.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <title>Menu Curso</title>
    </head>
    <body id="body-pd">
    <?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    require_once('../Modelo/Cursos.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Cursos();

    if(isset($_SESSION['msj'])){
        $respuesta = $_SESSION['msj']; ?>
        <script>
         alert("Su acción feu EXITOSA")
        </script>
    <?php
    unset($_SESSION['msj']);
    }
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
            <h1 id="title">Registro de Curso</h1>
        <form action="../controlador/AgregarCurso.php" method="post">
            <div class="input-group">
                <div class="input-field">
                    <select  required name="curso">
                        <option value="0A">0A</option>
                        <option value="0B">0B</option>
                        <option value="1A">1A</option>
                        <option value="1B">1B</option>
                        <option value="2A">2A</option>
                        <option value="2B">2B</option>
                        <option value="3A">3A</option>
                        <option value="3B">3B</option>
                        <option value="4A">4A</option>
                        <option value="4B">4B</option>
                        <option value="5A">5A</option>
                        <option value="5B">5B</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        <option value="10A">10A</option>
                        <option value="10B">10B</option>
                        <option value="11A">11A</option>
                        <option value="11B">11B</option>
                        <option hidden selected>Curso</option>
                    </select>
                
                </div>
                <div class="input-field">
                    <input type="number" placeholder="Cantidad de Estudiantes"required name="cantidad">
                </div>

                <div class="input-field">
                    <select name="profesor">
                        <option value="Sandra Olarte">Sandra Olarte</option>
                        <option value="Gloria Aldana">Gloria Aldana</option>
                        <option value="Eduvigis Camelo">Eduvigis Camelo</option>
                        <option value="Narda Monroy">Narda Monroy</option>
                        <option value="Fanny Roa">Fanny Roa</option>
                        <option value="Lida Guitierrez">Lida Guitierrez</option>
                        <option value="Martha Alfonso">Martha Alfonso</option>
                        <option value="Carolina Marin">Carolina Marin</option>
                        <option value="Marisol Ramirez">Marisol Ramirez</option>
                        <option value="Felipe Renteria">Felipe Renteria</option>
                        <option value="Patricia Cardozo">Patricia Cardozo</option>
                        <option value="Neida Monroy">Neida Monroy</option>
                        <option value="Ximena Martinez">Ximena Martinez</option>
                        <option value="Karen Herrera">Karen Herrera</option>
                        <option value="Carlos Lozano">Carlos Lozano</option>
                        <option value="Jairo Bravo">Jairo Bravo</option>
                        <option value="Smith Hinestroza">Smith Hinestroza</option>
                        <option value="Milena Beltran">Milena Beltran</option>
                        <option value="Jefferson Torres">Jefferson Torres</option>
                        <option value="Leonardo Salamanca">Leonardo Salamanca</option>
                        <option value="Emperatris">Emperatris</option>
                        <option value="Jenny Gomez">Jenny Gomez</option>
                        <option value="Richard Guitierrez">Richard Guitierrez</option>
                        <option value="Lilian Rojas">Lilian Rojas</option>
                        <option value="Adriana Tafur">Adriana Tafur</option>
                        <option value="Victor Ardila">Victor Ardila</option>
                        <option value="Yolanda Zamora">Yolanda Zamora</option>
                        <option value="Carlos Caro">Carlos Caro</option>
                        <option value="Miguel Caro">Miguel Caro</option>
                        <option hidden selected>Profesor a Cargo</option>
                    </select>
                </div>

                <div class="input-field">
                    <select required name="estado">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        <option hidden selected>Estado</option>
                    </select>
                    
                </div>

                    <div class="input-field">
                        <select  required name="jornada">
                            <option value="Manaña">Mañana</option>
                            <option value="Tarde">Tarde</option>
                            <option hidden selected>Jornada</option>
                        </select>
                    
                    </div>

                <div class="btn-field">
                    <button type="submit" name="registar">Registrar</button>
                    <button type="submit"name="Borrar" value="Borrar" onclick="formu.html">Borrar</button>
                </div>
            </div>

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
                    <a href="../Controlador/saliR.php" class="nav_link">Salir</a>
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