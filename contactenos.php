<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecontactenos1.css">
    <link rel="stylesheet" href="contacto2.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<a href="home.php" class="btn10">Inicio</a>
<a href="productos.php" class="btn11">Productos</a>
<a href="iniciosesionmensajes.php" class="btn12">Iniciar Sesion</a>
<!--<a href="mensajes.php" class="btn13">Mensajes</a>-->
<br><br>

  <!-- formulario de contacto en html y css -->  
  <form action="insertarcontacto1.php" metod="POST" class="form">
    <div class="form__container">
      <h2 class="form__title">Contactenos</h2>
      <input type="text" name="nombre" class="form__input" placeholder="Nombre">
      <input type="int" name="telefono" class="form__input" placeholder="Telefono">
      <input type="email" name="correo" class="form__input" placeholder="Correo Electronico">
      <textarea name="mensaje" class="form__input form__input--message" placeholder="Mensaje"></textarea>

      <input type="submit" value="Enviar" name="aceptar" class="form__cta">
    </div>
  </form>
  <br>

    <footer class="footer">
      &nbsp; &nbsp; &nbsp; &nbsp; PBX: 1749 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dirección: 8va. Calle 23-34 Zona 14 San Miguelito &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Carnet: 2021-40001 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nombre: Gilmar Elibán Isahar Crúz Lucas
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>