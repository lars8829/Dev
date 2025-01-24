
<body>
    <h3 style="position:relative; bottom:130px; font-size:30px; font-family:monospace; left:280px;">Allee</h3>
   
  <div class="login-container">

    <form method="post" action="php\procesarDatos.php" id="loginForm">
        <input type="text" placeholder="Email" name="email" id="email">
        <input type="password" placeholder="Codigo" name="password" id="password" autocomplete="on">
        <button type="submit">Iniciar sesión</button>
    </form>
      <p id="errores" style="color:white; position:relative; left:2px; text-align:center;">
      <?php 
          if(isset($_GET['error'])) {
              if($_GET['error']==1){
              echo "Usuario Inactivo, Contacte al Administrador... V3";
              }
              if($_GET['error']==2){
                echo "Usuario o contraseña Incorrecta... V3";
                /* echo "<script> alertify.error('Credeneciales Incorrectas'); </script>"; */
              }    
              if($_GET['error']==3){
                echo "Sesion Finalizada... V3";
                /* echo "<script> alert('Session Finalizadas'); </script> ";*/
              }   
              if($_GET['error']==4){
                echo "Debe ingresar un usuario registrado en el  Sistema... V3";
                /* echo "<script> alert('Session Finalizadas'); </script> ";*/
              } 
              if($_GET['error']==5){
                echo " Acceso Denegado... V3";
                /* echo "<script> alert('Session Finalizadas'); </script> ";*/
              } 
            }
      ?>
      </p>
  </div> 
</body>
</html>


