<?php
# Iniciar sesion (si, aunque la vamos a destruir, primero se debe iniciar)
session_start();
# Despues, destruirla
# Eso va a eliminar todo lo que haya en $_SESSION
session_destroy();
# Finalmente lo redireccionamos a la pagina index.php
header('Location:../index.html');
?>