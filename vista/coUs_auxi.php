<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/EstiloMenuC.css">
        <link rel="stylesheet" href="css/stil.css">
        <link rel="stylesheet" href="css/consultar.css">
        <script src="java/main.js" defer></script>
        
        
        <title>Menu</title>
    </head>
    <?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    require_once('../Modelo/Usuarios.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Usuarios();
    $idusuario=$ModeloLogin->GetIdUsuario();
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
<form action="">
    
</form>
            <table class="tabla" cellspacing="20" >
        <thead>
            <tr>
                <th style="width: 10px;">Id</th>
                <th style="width: 60px;">Nombre</th>
                <th style="width: 60px;">Rol</th>
                <th style="width: 60px;">Estado</th>
                <th>Contraseña</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Usuario=$model->Obtener($idusuario);
            if ($Usuario!=null){
                foreach($Usuario as $r){
                ?>
                    <tr>
                        <td class="celdas" style="width: 100px;"><?php echo $r['id']; ?></td>
                        <td class="celdas" style="width: 300px;"><?php echo $r['nombre']; ?></td>
                        <td class="celdas" style="width: 300px;"><?php echo $r['rol']; ?></td>
                        <td class="celdas" style="width: 300px;"><?php echo $r['estado']; ?></td>
                        <td class="celdas" style="width: 300px;"><div class="pass"><input type="password" value="<?php echo $r['contraseña']; ?>" disabled="true"/></div></td>
                        <td  style="width: 5px;" class="boton1">
                            <a class="bot" href="menu_usu_auxi.php?id=<?php echo $r['id'];?>"><img src="assets/lapiz.svg" alt="" class=""></a><!--indica que controlador y que accion ejecutar, en este caso llamaria al archivo editarusuario.php pasando el id como parametro--->
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
<section class="modal">
        <div class="modal_container">
            <img src="assets/delete-line.svg" class="modal_img"alt="">
            <h2 class="modal_title">¿Deseas Eliminar?</h2>
            <p class="modal_paragraph">El Usuario se inactivara</p>
        <div class="modal_bnt">
            <a href="" class="modal_eliminar">SI</a>
            <a href="" class="modal_close">NO</a>
        </div>
        </div>
    </section>

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
                        <a href="coUs_Auxi.php" class="nav_link nav_link--inside">Consultar</a>
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