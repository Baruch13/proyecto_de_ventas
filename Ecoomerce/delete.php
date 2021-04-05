<?php

require "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM publicaciones WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Ocurrio Un Error");
    }
    header("location: panel.php");
}
