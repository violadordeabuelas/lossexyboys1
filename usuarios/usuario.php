<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    $conexion = mysqli_connect("localhost", "root", "", "usuarios");

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contra'];
    
    $sql = "SELECT * FROM usuarios 
    WHERE usuario='$usuario' 
    AND contra='$contraseña'";

    $resultado = mysqli_query($conexion, $sql);

    $filas = mysqli_num_rows($resultado);

    if(mysqli_num_rows($resultado) > 0){
        $fila = mysqli_fetch_array($resultado);
    >?>
</body>
</html>