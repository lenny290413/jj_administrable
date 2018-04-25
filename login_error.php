<html>
    <head>
       <title>Login Blog</title>
        <link rel="stylesheet" href="css/estilos_login_blog.css">
    </head>
     <form action="php/validar.php" method="post">

      <h1>Login Blog JJMM</h1>
          <div class="inset">
              <p>
                <label for="email">Email o Usuario</label>
                <input type="text" name="usuario" id="usuario">
              </p>
              <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
              </p>
            <p>Error al validar los datos por favor intentelo denuevo</p>
         </div>
              <p class="p-container">
                <input type="submit" name="go" id="go" value="Ingrese">
              </p>
    </form> 
</html>