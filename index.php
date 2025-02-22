<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Parciales";

$conn = new mysqli($servidor, $username, $password, $dbname);

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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Starbucks</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/starbucks-logo.png" alt="Starbucks Logo">
        </div>
        <h1>Contáctanos</h1>
        <form action="php/submit_form.php" method="post">
            <label for="nombre">Escribe tu nombre:</label>
            <input type="text" id="nombre" name="nombre" maxlength="50" required>
            
            <label for="email">Escribe tu correo:</label>
            <input type="email" id="email" name="email" maxlength="20" required>
            
            <label for="mensaje">Escribe un mensaje:</label>
            <textarea id="mensaje" name="mensaje" maxlength="450" required></textarea>
            
            <input type="submit" value="Enviar">
        </form>

        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a>
            <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a>
        </div>

        <div class="contact-info">
            <p>Dirección o Ubicación: [Dirección de la empresa]</p>
            <p>Teléfono: [Teléfono de la empresa]</p>
            <p>Correo: [Correo de la empresa]</p>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $insert = "INSERT INTO Primer_Parcial (Nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
    $query = mysqli_query($conn, $insert);

}
?>