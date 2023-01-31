<?php require_once "conecta_db.php";?>
<?php
// Recolectar información del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Verificar si el nombre de usuario ya existe en la base de datos
$query = "SELECT * FROM usuarios WHERE username='$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    // Si el nombre de usuario ya existe, enviar una alerta de error
    echo "<script>alert('El nombre de usuario ya existe, por favor elige otro'); window.location.href='index.php';</script>";
} else {
    // Encriptar la contraseña
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Si el nombre de usuario no existe, registrar al usuario en la base de datos
    $query = "INSERT INTO usuarios (username, password, user_type) VALUES ('$username', '$password_hash', '$user_type')";
    if (mysqli_query($conn, $query)) {
        // Si el registro fue exitoso, enviar una alerta de registro exitoso
        echo "<script>alert('Registro exitoso'); window.location.href='index.php';</script>";
    } else {
        // Si el registro falló, enviar una alerta de error
        echo "<script>alert('Error al registrarse'); window.location.href='index.php';</script>";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

?>
