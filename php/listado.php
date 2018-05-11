<?php
include ("cn.php");

if ($conexion){
    $consulta= "SELECT codigo, titulo, autor FROM articulos ";
    $resultado = mysqli_query($conexion, $consulta);
    while ($fila =mysqli_fetch_array($resultado)){?>
        <div class="grupo_items">
            <span><?php echo $fila ['codigo']; ?></span>
            <span><?php echo $fila ['titulo']; ?></span>
            <span><?php echo $fila ['autor']; ?></span>
        </div>
        <?php
    }}

?>