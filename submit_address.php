<?php require_once "conecta_db.php";?>
<?php
    // Iniciar sesión
    session_start();

    // Recibir los datos del formulario
    $edificio = $_POST['edificio'];
    $salon = $_POST['salon'];
    $planta = $_POST['planta'];
    $username = $_SESSION['username'];

    // Validar que el usuario esté logueado
    if(!isset($_SESSION['username'])) {
        // Redirigir a la página de inicio de sesión
        header('Location: login.php');
    } else {
        // Crear la consulta SQL
        $sql = "INSERT INTO direcciones (username, edificio, salon, planta) VALUES ('$username','$edificio', '$salon', '$planta')";

        // Ejecutar la consulta
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Dirección registrada con éxito'); window.location.href='order.php';</script>";
        } else {
            echo "<script>alert('No se pudo registrar la dirección'); window.location.href='order.php';</script>";
        }

        // Cerrar conexión
        mysqli_close($conn);
    }
?>