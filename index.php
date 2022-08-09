<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <h3>¡Bienvenido!</h3>
                <form action="home.php" method="POST">
                    <div class="input-box">
                        <input type="text" placeholder="Usuario" class="input-control">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="input-control">
                    </div>
                    <button type="submit" class="btn">Iniciar Sesión</button>
                </form>
                <p>¿No tienes una cuenta? <a href="register.php" class="gradient-text">Crear Cuenta</a></p>
            </div>
        </div>
    </section>
</body>
</html>