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
    $contra=$_POST['pass'];
    echo $nom;
    echo $contra;
    if($nom=="Leo"&& $contra=="123"){
        $_SESSION['nom']="leo";
        $_SESSION['edad']="18";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }
 if($nom=="Leo"&& $contra=="123"){
        $_SESSION['nom']="leo";
        $_SESSION['edad']="18";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }
     if($nom=="Alexander"&& $contra=="123"){
        $_SESSION['nom']="Alexander";
        $_SESSION['edad']="17";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }
     if($nom=="Isac"&& $contra=="123"){
        $_SESSION['nom']="Isac";
        $_SESSION['edad']="17";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }
     if($nom=="Mateo"&& $contra=="123"){
        $_SESSION['nom']="Mateo";
        $_SESSION['edad']="17";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }
     if($nom=="Fernando"&& $contra=="123"){
        $_SESSION['nom']="Fernando";
        $_SESSION['edad']="17";
        header("Location:dos.php");
    }else{
        header("Location:maquetacion.php");
    }
    ?>
</body>
</html>