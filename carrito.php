<?php require_once "conecta_db.php";?>
<?php
session_start();
    if(isset($_POST['comprar'])) {
        echo "<script>if(confirm('¿Estás seguro de realizar la compra?')) {";
        $query = "SELECT * FROM dulces";
        $result = mysqli_query($conn, $query);
        $total = 0;
        $detalle_compra = "";
        while($row = mysqli_fetch_assoc($result)){
            $nombre = $row['nombre'];
            $cantidad = $_POST[$nombre];
            $precio = $row['precio'];
            if($cantidad > 0) {
                $subtotal = $cantidad * $precio;
                $total += $subtotal;
                $detalle_compra .= $nombre . " - Cantidad: " . $cantidad . " - Subtotal: $" . $subtotal . "\n";
            }
        }
        $username = $_SESSION['username'];
        $direccion = $_POST['direccion'];
        $direccion = explode(",", $direccion);
        $edificio = $direccion[0];
        $salon = $direccion[1];
        $planta = $direccion[2];
        $direccion_completa = implode(',', $direccion);
        $query = "INSERT INTO compras_productos (direccion, username, detalle, total, fecha) VALUES ('$direccion_completa', '$username', '$detalle_compra', '$total', now())";
        mysqli_query($conn, $query);
        echo "alert('Compra realizada con éxito. Total: $" . $total . "');window.location.href='order.php';}";
        echo "else {window.location.href='index.php';}</script>";
    }
?>
