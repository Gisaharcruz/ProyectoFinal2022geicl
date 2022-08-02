<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <h3>Welcome</h3>
                <form action="home.php" method="POST">
                    <div class="input-box">
                        <input type="text" placeholder="User" class="input-control">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" class="input-control">
                    </div>
                    <button type="submit" class="btn">Log In</button>
                </form>
                <p>Don't have an account? <a href="register.php" class="gradient-text">Register</a></p>
            </div>
        </div>
    </section>
</body>
</html>