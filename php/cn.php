<?php
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "blog_jj");
mysqli_set_charset($conexion, 'utf8');

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    die();
}else{

}
?>
