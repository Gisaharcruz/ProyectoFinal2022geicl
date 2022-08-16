<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="iniciosesionmensajes.css">
</head>
<body>
<section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <h3>Iniciar Sesión</h3>
                <form action="mensajes.php" method="POST">
                    <div class="input-box">
                        <h4>Usuario</h4><br>
                        <input type="text" placeholder="Usuario" class="input-control">
                    </div>
                    <br>
                    <div class="input-box">
                        <h4>Contraseña</h4><br>
                        <input type="password" placeholder="Contraseña" class="input-control">
                    </div>
                    <br>
                    <button type="submit" class="btn">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>