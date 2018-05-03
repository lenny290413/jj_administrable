<?php
    function actualizar(){
        include ('cn.php');
        $consulta= "SELECT*FROM articulos";
        $datos= mysqli_query ($conexion,$consulta);
        while ($fila =mysqli_fetch_array($datos)){
?>
    <a href=" <?php echo $fila ['link']; ?>" class="blog_item_index" target="_blank">
      <img src="<?php echo $fila ['imagen']; ?>" alt="">
      <h3><?php echo $fila ['titulo']; ?></h3>
      <span>
          <i>Autor: <?php echo $fila ['autor']; ?></i>
          <i>Fecha: <?php echo $fila ['fecha']; ?></i>
      </span>
      <i class="codigo">Codigo: <?php echo $fila ['codigo']; ?></i>
    </a>
<?php                                     
    }
        }
actualizar(); 
?>
