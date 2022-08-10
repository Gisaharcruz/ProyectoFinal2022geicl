<?php
include('bd.php');
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM mensajes WHERE no_mensajes=$id";
    $resultado=mysqli_query($conect, $query);
    if(!$resultado){
        die("Usuario no Encontrado");
    }
    header("location:mensajes.php");

}
?>