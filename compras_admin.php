<?php require_once "conecta_db.php";?>
<?php include "templates/navbar.php"?>
<?php 
// Iniciar sesión
session_start();

// Verificar si el usuario está registrado
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

// Verificar el tipo de usuario
if ($_SESSION['user_type'] != 'admin') {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compras</title>
</head>
<body>
  <div class="form-control">
  <h1>Compras Realizadas</h1>
    <div class="col-md-12">
  <div class="table-responsive">
  <table class="table">
    <tr>
      <th>Usuario</th>
      <th>Direccion</th>
      <th>Detalle</th>
      <th>Total</th>
      <th>Fecha</th>
    </tr>
    <?php
        // Consulta SQL para recuperar los datos de las compras
  $query = "SELECT * FROM compras_productos";
  $result = mysqli_query($conn, $query);

  // Recorrido de los resultados de la consulta y generación de la tabla HTML
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['direccion'] . "</td>";
    echo "<td>" . $row['detalle'] . "</td>";
    echo "<td>" . $row['total'] . "</td>";
    echo "<td>" . $row['fecha'] . "</td>";
    echo "</tr>";
  }

  // Cierre de la conexión a la base de datos
  mysqli_close($conn);
?>
</table>
</div>
</div>
</div>
</body>
</html>
