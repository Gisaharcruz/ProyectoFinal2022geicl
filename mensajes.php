<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menssage</title>
    <link rel="stylesheet" href="stylemensajes.css">
    <link rel="stylesheet" href="tabla.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<a href="home.php" class="btn14">Inicio</a>
<a href="tiendas.php" class="btn15">Tiendas</a>
<a href="contactenos.php" class="btn16">Contactenos</a>
<br><br>

<h3> &nbsp; Mensajes Recibidos</h3>
<br>

<div class="col-8">
        <table>
          <tr>
            <th>Nombre </th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Mensaje</th>
          </tr>
<?php
  include('bd.php');
    $query = "SELECT nombre, telefono, correo, mensaje FROM mensajes";
    $resultado = mysqli_query($conect, $query);
    while($row=mysqli_fetch_array($resultado)){
?>

<tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['telefono']?></td>
            <td><?php echo $row['correo']?></td>
            <td><?php echo $row['mensaje']?></td>
            <td>
        <?php } ?>
        </table>
        </div>
<br>

<footer class="footer">
&nbsp; &nbsp; &nbsp; &nbsp; PBX: 1749 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dirección: 8va. Calle 23-34 Zona 14 San Miguelito &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Carnet: 2021-40001 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nombre: Gilmar Elibán Isahar Crúz Lucas
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>