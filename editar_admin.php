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

    $id=$_GET['id'];
    $sql="SELECT * FROM adminis WHERE id='$id'";
    $query= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  header {
    background: #111;
    color: #fff;
    padding: 12px 40px;
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
  }
  header img.logo {
    height: 100px;
    width: 100px;
    transition: transform 0.3s ease;
  }
  header img.logo:hover {
    transform: scale(1.1);
  }
  nav ul {
    display: grid;
    grid-auto-flow: column;
    justify-content: center;
    list-style: none;
    gap: 20px;
  }
  nav a {
    color: #fff;
    text-decoration: none;
  }
  nav a:hover {
    color: #5eff6ce5;
  }
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #111;
  min-width: 160px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 5px;
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #333;
  color: #5eff6ce5;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.use {
background-color: white;
max-width: 600px;
margin: auto;
padding: 20px;
border-radius: 8px;
}
.use-label {
display: block;
margin-top: 15px;
font-weight: bold;
}
.use-input {
width: 99%;
padding: 10px;
margin-top: 5px;
border: 1px solid black;
border-radius: 4px;
}
.bot {
background-color: #8df491;
color: black;
padding: 10px 20px;
border: none;
margin-top: 20px;
width: 100%;
font-size: 25px;
}
    footer {
    background: #111;
    color: #ccc;
    padding: 40px 20px;
    margin-top: 40px;
  }
  .goldaabajo {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
  }
  footer h4 {
    color: #fff;
    margin-bottom: 10px;
  }
  footer ul {
    list-style: none;
  }
  footer li {
    margin-bottom: 8px;
    font-size: 14px;
  }
  footer a {
    color: #ccc;
    text-decoration: none;
  }
  footer a:hover {
    color: #fff;
  }
  .redes-musculoso a {
    margin-right: 10px;
    display: inline-block;
    font-size: 18px;
  }
  .subscribe {
    display: grid;
    gap: 10px;
  }
  .subscribe input {
    padding: 8px;
    border: none;
    border-radius: 4px;
    width: 80%;
  }
  .subscribe button {
    background: #3cff46;
    border: none;
    color: #fff;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
  }
  .subscribe button:hover {
    background: #3cffce;
  }
    </style>   
</head>
<body>
    <header>
  <a href="pagina_principal.php">
  <img src="logo bomble.png" alt="Logo" class="logo" style="border-radius: 50%;">
  </a>
  <nav>
    <ul>
      <li><a href="productos.php">NUESTROS JUGOS</a></li>
      <li><a href="horarioatencion.php">PROGRAMAS</a></li>
      <li><a href="quienes.php">QUIENES SOMOS</a></li>
      <li><a href="telefonos .php">TELEFONOS</a></li>
      <li class="dropdown">
  <a href="productos.php">MÁS</a>
  <div class="dropdown-content">
    <a href="https://maps.app.goo.gl/L1Kd1FhKZzSNHeTV7">Ubicación</a>
    <a href="registro.php">Registrarse</a>
    <a href="creacion.php">Creacion de vasos</a>
    <a href="creacionjugos.php">Creacion de jugos</a>
    <a href="adminbueno.php">Panel de Administración</a>
  </div>
</li>
    </ul>
  </nav>
</header>
    <form action="editado_admin.php" method="post" class="use">
        <label for="id">ID:</label>
        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" reandonly><br>

        <label for="usuario" class="use-label">Usuario:</label>
        <input type="text" class="use-input" id="usuario" name="usuario" required value="<?php echo $row['usuario']; ?>"><br>

        <label for="nombre">Nombre:</label>
        <input type="text" class="use-input" id="nombre" name="nombre" required value="<?php echo $row['nombre']; ?>"><br>

        <label for="tele" class="use-label">Teléfono:</label>
        <input type="text" class="use-input" id="tele" name="tele" required value="<?php echo $row['tele']; ?>"><br>

        <label for="naci" class="use-label">Fecha de nacimiento:</label>
        <input type="date" class="use-input" id="naci" name="naci" required value="<?php echo $row['naci']; ?>"><br>

        <label for="correo" class="use-label">Correo:</label>
        <input type="email" class="use-input" id="correo" name="correo" required value="<?php echo $row['correo']; ?>"><br>

        <label for="contraseña" class="use-label">Contraseña:</label>
        <input type="password" class="use-input" id="contraseña" name="contraseña" required><br>

        <label for="reportes" class="use-label">Reportes:</label>
        <input type="text" class="use-input" id="reportes" name="reportes" required value="<?php echo $row['reportes']; ?>"><br>

        <label for="tipo" class="use-label">Tipo:</label>
        <input type="text" class="use-input" id="tipo" name="tipo" required value="<?php echo $row['tipo']; ?>"><br>

        <label for="dire" class="use-label">Dirección:</label>
        <input type="text" class="use-input" id="dire" name="dire" required value="<?php echo $row['dire']; ?>"><br>
    
                <input type="submit" value="Registrar" class="bot">
    
    </form>



  <footer>
  <div class="goldaabajo">
    <div>
      <h4>NOSOTROS</h4>
      <ul>
        <li><a href="#">Nuestra historia</a></li>
        <li><a href="#">Nuestra filosofía</a></li>
        <li><a href="#">Responsabilidad social</a></li>
      </ul>
    </div>
    <div>
      <h4>TIENDA</h4>
      <ul>
        <li><a href="#">Programa 7 días</a></li>
        <li><a href="#">Dieta líquida de 1 día</a></li>
        <li><a href="#">Otros productos</a></li>
      </ul>
    </div>
    <div>
      <h4>AYUDA</h4>
      <ul>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Preguntas frecuentes</a></li>
        <li><a href="#">Términos y condiciones</a></li>
      </ul>
    </div>
    <div class="subscribe">
      <h4>SUSCRÍBETE</h4>
      <p>Recibe nuestras últimas noticias</p>
      <input type="email" placeholder="Tu email...">
      <button>OK</button>
      <div class="redes-musculoso">
        <a href="#">🌐</a>
        <a href="#">📘</a>  
        <a href="#">📸</a>
        <a href="#">📍</a>  
      </div>
    </div>
  </div>
</footer>
</body>
</html>