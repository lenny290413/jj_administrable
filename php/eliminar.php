<?php 
    include('cn.php');
    $codigo = $_GET["codigo_eliminar"];
    
    
    $consultar= "select COUNT(codigo)from articulos where codigo ='$codigo'";
    if($consultar>=0){
        $eliminar = "delete from articulos where codigo='$codigo'";  
        mysql_query($eliminar);
        echo "
        <script>
           alert('Articulo eliminado');
           window.history.go(-1);
        </script>";
        include ("actualizar.php");
        Header("location:../panel_de_control.php");
    }else{
        echo "
         <script>
           alert('Articulo no encontrado, verifique el codigo');
           window.history.go(-1);
        </script>";
        include ("actualizar.php");
        Header("location:../panel_de_control.php");
    }

?>