<?php
$servername = "46.17.175.47";
$username="u140170884_dreyl";
$password="829An963dr80Es96";
$database="u140170884_usdnj";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection up
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$codigoUber = $_POST['codigoUber'];
$codigoLyft = $_POST['codigoLyft'];
$firma = $_POST['firma'];
 
$sql = "INSERT INTO usuariosUberLyft (nombre, apellido, telefono, email, codigoUber, codigoLyft, firma) VALUES ('$nombre','$apellido','$telefono','$email','$codigoUber','$codigoLyft','$firma')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
