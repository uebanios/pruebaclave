<<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="estilos.css">
      <style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
      </style>
</head>
   <body>
      <div id="login">
         <form action= "usuario.php" method="GET">
            <label>
            <div align="center"><span class="Estilo1">Unidad Educativa Ba&ntilde;os </span>PTY<br>
              </div>
            </label>
            <br>
            <label>
            <div align="center"><span class="Estilo2">Ingrese la Contrase&ntilde;a:</span></div>
            </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" value="Enviar"/>
         </form>
      </div>
   </body>
</html>