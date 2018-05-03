<?php
include ("cn.php");
if ($conexion){
    $consulta= "delete from articulos where titulo = '$_POST[busqueda]'";
    $resultado = mysqli_query($conexion, $consulta);
    Header("location:../eliminar_articulo.php");
    }else{
    echo "
        <script>
           alert('Error al ingregar a la base de datos');
           window.history.go(-1);
        </script>";
}
?>