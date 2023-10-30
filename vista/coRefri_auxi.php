<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/EstiloMenuC.css">
        <link rel="stylesheet" href="css/stil.css">
        <link rel="stylesheet" href="css/consultar.css">
        <script src="java/buscador.js" defer></script> 
        <script src="java/page.js" defer></script> 
        <script src="java/main.js" defer></script>
        
        
        <title>Menu</title>
    </head>
    <?php
    //SI SE LLEGASE A COPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESESSION
    //DE LO CONTRARIO REDIRECCIONA AL LOGIN Y SALE DE LA APLICACION
    require_once('../Modelo/login.php');
    require_once('../Modelo/Refrigerios.php');
    $ModeloLogin=new Login();
    $ModeloLogin->validateSession();
    $model=new Refrigerios();
    $Refrigerio=$model->Listar();
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
            <form action="">
                <div class="container">
            <div class="search-container">
            <input type="text" id="buscador" class="tabla input2" data-table="tabla_id" placeholder="Buscar">
            <svg viewBox="0 0 24 24" class="search__icon">
            <g>
            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
            </path>
            </g>
            </svg>
            </div>
            </div>
        </form>

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
    <div class="p"><div class="" id="paginador"></div></div></div>
            <table class="tabla_id tabla2" cellspacing="20" id="tblDatos" >
        <thead>
            <tr>
                <th style="width: 10px;">Id</th>
                <th style="width: 60px;">Fecha</th>
                <th style="width: 60px;">Hora</th>
                <th style="width: 60px;">Tipo</th>
                <th style="width: 60px;">Cantidad</th>
                <th style="width: 60px;">Descripcion</th>
                <th style="width: 60px;">Estado</th>
                <th style="width: 60px;">Id Coordinador</th>
                <th style="width: 60px;">Id Auxiliar</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($Refrigerio!=null){
                foreach($Refrigerio as $r){
                ?>
                    <tr>
                    <td class="celdas2" style="width: 1px"><?php echo $r['id']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['fecha']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['hora']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['tipo']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['cantidad']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['descripcion']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['estado']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['id_coordinador_fk']; ?></td>
                        <td class="celdas2" style="width: 200px"><?php echo $r['id_auxiliar_fk']; ?></td>
                
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
            <p class="modal_paragraph">El Refrigerio se inactivara</p>
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