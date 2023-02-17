<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Aquí es donde iría el código para guardar los datos del usuario en la base de datos
    
    // Redireccionar al usuario a la página de inicio de sesión
    header("Location: login.html");
    exit;
  }
?>