<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="admin1";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }

    $codigo=$_POST['codigo'];
    $producto=$_POST['producto'];
    $vasos=$_POST['vasos'];
    $cantidad=$_POST['cantidad'];

    $sql="INSERT INTO produc (codigo, producto, vasos, cantidad) VALUES ('$codigo', '$producto', '$vasos', '$cantidad')";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("location: comprado.php");
    }