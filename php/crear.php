 
 <?php
    include('cn.php');
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $autor = $_POST["autor"];
    $imagen = $_POST["imagen"];
    $titulo_formateado = str_replace(" ","-", $titulo);
    $link_articulo = "blog/".$titulo_formateado.".php";
    $consulta = "INSERT INTO articulos(codigo,titulo,descripcion,fecha,autor,imagen,link) VALUES('dfds','$titulo','$descripcion','$fecha','$autor','$imagen','$link_articulo')";

mysqli_query($conexion,$consulta);
if($consulta = true){
    $link_articulos = fopen("../blog/".$titulo_formateado.".php","w+");
    require('document.php');
    $escribir = fwrite($link_articulos,$contenido);
    Header("location:../crear_articulo.php");
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
    Header("location:../crear_articulo.php");
}

?>




