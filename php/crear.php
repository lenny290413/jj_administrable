 
 <?php
$enlace = mysqli_connect("localhost", "root", "");
mysql_select_db("blog_jj");
if (!$enlace){
    echo '<p>Por favor, complete el <a href="formulario.html">formulario</a></p>';
     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;

} else {
   $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $autor = $_POST["autor"];
    $imagen = $_POST["imagen"];
    $link = $_POST["link"];

//Preparamos la orden SQL
$consulta = "INSERT INTO articulos(codigo,titulo,descripcion,fecha,autor,imagen,link) VALUES('dfds','$titulo','$descripcion','$fecha','$autor','$imagen','$link')";

mysql_query($consulta);
}
?>




