<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    $nom=$_POST['usuario'];
    $contra=$_POST['contra'];
    echo $nom;
    echo $contra;
    if($nom=="Lucas"&& $contra=="123"){
        $_SESSION['nom']="Lucas Torrico Alberto";
        $_SESSION['edad']="15";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }

    ?>
</body>
</html>