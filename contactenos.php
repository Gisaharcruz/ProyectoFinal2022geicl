<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecontactenos.css">
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<a href="home.php" class="btn10">Inicio</a>
<a href="productos.php" class="btn11">Productos</a>
<a href="iniciosesionmensajes.php" class="btn12">Iniciar Sesion</a>
<!--<a href="mensajes.php" class="btn13">Mensajes</a>-->
<br><br>

<h3>&nbsp; Contactenos</h3>
  <!-- formulario de contacto en html y css -->  
  <div class="contact_form">

    <div class="formulario">

          <form action="insertarcontacto.php" method="post">       

            
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu Nombre">
                </p>
            
                <p>
                  <label for="telefone" class="colocar_telefono">Telefono/Celular
                  <span class="obligatorio">*</span>
                  </label>
                    <input type="tel" name="introducir_telefono" id="celular" placeholder="Escribe tu Correo">
                </p>  

                <p>
                  <label for="email" class="colocar_email">Correo Electronico
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="correo" required="obligatorio" placeholder="Escribe tu Telefono">
                </p>

                <p>
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                  </label>                     
                  <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                </p>                    
              
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
        
            
          </form>
    </div>  
  </div>
  <br>

    <footer class="footer">
      &nbsp; &nbsp; &nbsp; &nbsp; PBX: 1749 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dirección: 8va. Calle 23-34 Zona 14 San Miguelito &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Carnet: 2021-40001 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nombre: Gilmar Elibán Isahar Crúz Lucas
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>