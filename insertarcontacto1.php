<?php
include('bd.php');
if (isset($_POST['aceptar'])) {
    $nom=$_POST['nombre'];
    $tel=$_POST['telefono'];
    $corr=$_POST['correo'];
    $men=$_POST['mensaje'];

    $query="INSERT INTO mensajes(nombre, telefono, correo, mensaje) VALUES ('$nom', '$tel', '$corr', '$men')";
    $resultado=mysqli_query($conect, $query);
    if($resultado){
            echo '<script lenguage="javascript">';
            echo 'alert("¡Tu mensaje a sido enviado exitosamente, Gracias por usar nuestros servicios:)!")
            window.location = "contactenos.php";
            </script>';
            }else {
            echo '<script lenguage="javascript">';
            echo 'alert("¡Datos no enviados, vuelve a intentarlo)!")
            window.location = "contactenos.php";
            </script>';
            }
            echo '<script lenguage="javascript">';
            echo 'alert("¡Datos no enviados, vuelve a intentarlo)!")
            window.location = "contactenos.php";
            </script>';
        }
        mysqli_close($conect);
?>