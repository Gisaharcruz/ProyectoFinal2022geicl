<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciosesionmensajes0.css">
    <title>Iniciar Sesión</title>
    <script src="https://kit.fontawesome.com/05f5e822e2.js" crossorigin="anonymous"></script>
    <script src="login1.js"></script>
</head>
<body>
<section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>Iniciar Sesión</h3>
                <form id="form_id" method="POST" name="myform">
                    <div class="input-box">
                        <h4>Usuario</h4><br>
                        <input type="text" name="usuar" id="usuar" placeholder="&nbsp;Usuario" class="input-control">
                    </div>
                    <br>
                    <div class="input-box">
                        <h4>Contraseña</h4><br>
                        <input type="password" name="password" id="password" placeholder="&nbsp;Contraseña" class="input-control">
                    </div>
                    <br>
                    <button type="button" value="Login" id="sumit" onclick="validate()" type="submit" class="btn">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>