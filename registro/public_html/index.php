<html>
  <head>
    <title>Registro</title>
    <style>
      body {
        background-color: lightgray;
        text-align: center;
        font-family: Arial, sans-serif;
      }
      
      h1 {
        margin-top: 100px;
        color: darkslateblue;
      }
      
      form {
        background-color: white;
        display: inline-block;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        text-align: left;
      }
      
      input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid lightgray;
        font-size: 16px;
      }
      
      input[type="submit"] {
        background-color: darkslateblue;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        cursor: pointer;
      }
      
      input[type="submit"]:hover {
        background-color: royalblue;
      }
    </style>
  </head>
  <body>
    <h1>Registro</h1>
    <form action="php.php" method="post">
      <label for="username">Nombre de usuario:</label>
      <input type="text" id="username" name="username">
      <br><br>
      <label for="email">Dirección de correo electrónico:</label>
      <input type="email" id="email" name="email">
      <br><br>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Registrarse">
    </form>
  </body>
</html>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}

?>