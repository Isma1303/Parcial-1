<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Parciales";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO Primer_Parcial (Nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>