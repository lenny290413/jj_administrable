<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
// conectar base de datos
$conexion=mysqli_connect("","root","","blog_jj");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:../blog.php");
}
else {
    header("location:../login_error.php");

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>