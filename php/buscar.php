<?php
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "blog_jj");
mysqli_set_charset($conexion, 'utf8');
$consultaBusqueda = $_POST['valorBusqueda'];
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
$mensaje = "";

if (isset($consultaBusqueda)) {

    //Selecciona todo de la tabla mmv001
    //donde el nombre sea igual a $consultaBusqueda,
    //o el apellido sea igual a $consultaBusqueda,
    //o $consultaBusqueda sea igual a nombre + (espacio) + apellido
    $consulta = mysqli_query($conexion, "SELECT titulo FROM articulos
	WHERE titulo COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%'");

    $filas = mysqli_num_rows($consulta);
    if ($filas === 0) {
        $mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
    }else{
        //Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

        //La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
        while($resultados = mysqli_fetch_array($consulta)) {
            $titulo = $resultados['titulo'];

            //Output
            $mensaje .= '
			<p>
			<strong>Apellido:</strong> ' . $titulo . '<br>
			</p>';

        };//Fin while $resultados
    };
};
echo $mensaje;
?>