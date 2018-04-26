<?php   
    function actualizar(){
    // 1) Conexión
        if ($conexión = mysql_connect("localhost", "root", "")){
    // 2) Preparar la orden SQL
        $consulta= "SELECT*FROM articulos";
    // 3) Ejecutar la orden y obtener datos
        mysql_select_db("blog_jj");
        $datos= mysql_query ($consulta);
        // 4) Ir Imprimiendo las filas resultantes 
        while ($fila =mysql_fetch_array($datos)){
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
        }
actualizar(); 
?>
