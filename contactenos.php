<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecontactenos.css">
    <link rel="stylesheet" href="#"> <!-- Poner Estilo de Insertar los Datos -->
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<a href="home.php" class="btn10">Inicio</a>
<a href="productos.php" class="btn11">Productos</a>
<a href="iniciosesionmensajes.php" class="btn12">Iniciar Sesion</a>
<a href="mensajes.php" class="btn13">Mensajes</a>
<br><br>

<section class="form-main">
            <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <h3>Contactenos</h3>
                <br>
                <form action="insertarcontacto.php" method="POST">
                    <p class="text-start">Nombre</p>
                    <div class="input-box">
                        <input type="text" name="nombre" placeholder="Introduzca su Nombre & Apellido" class="input-control">
                    </div>
                    <p class="text-start">Telefono/Celular</p>
                    <div class="input-box">
                        <input type="text" name="telefono" placeholder="Introduzca su Numero de Telefono" class="input-control">
                    </div>
                    <p class="text-start">Correo Electronico</p>
                    <div class="input-box">
                        <input type="text" name="correo" placeholder="Introduzca su Correo Electronico" class="input-control">
                    </div>
                    <p class="text-start">Mensaje</p>
                    <div class="input-box">
                        <input type="text" name="mensaje" placeholder="Introduzca su Mensaje" class="input-control">
                    </div>
                    <button type="submit" name="aceptar" class="btn">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>
    <br>

    <footer class="footer">
&nbsp; &nbsp; &nbsp; &nbsp; PBX: 1749 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dirección: 8va. Calle 23-34 Zona 14 San Miguelito &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Carnet: 2021-40001 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nombre: Gilmar Elibán Isahar Crúz Lucas
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>