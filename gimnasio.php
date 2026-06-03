<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gimnasio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
$NumeroSprint = $_POST['NumeroSprint'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];

$sql = "INSERT INTO sprin (NumeroSprint, fechaInicio, fechaFin) VALUES ('$NumeroSprint', '$fechaInicio', '$fechaFin')";

if ($conn->query($sql) === TRUE) {
echo "Sprint creado correctamente";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
