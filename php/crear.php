 
 <?php
    include('cn.php');
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $autor = $_POST["autor"];
    $imagen = $_POST["imagen"];
    $link = $_POST["link"];
$consulta = "INSERT INTO articulos(codigo,titulo,descripcion,fecha,autor,imagen,link) VALUES('dfds','$titulo','$descripcion','$fecha','$autor','$imagen','$link')";

mysql_query($consulta);
if($consulta = true){
    Header("location:../panel_de_control.php");
    echo "
        <script>
           alert('Articulo creado');
           window.history.go(-1);
        </script>";
    include ("actualizar.php");
  
}else{
     echo "
        <script>
           alert('Error al regristrar el articulo, llama a Jesus');
           window.history.go(-1);
        </script>";
     include ("actualizar.php");
    Header("location:../panel_de_control.php");
}

?>




