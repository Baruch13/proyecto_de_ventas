<?php

require "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM publicaciones WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
    }

}
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE publicaciones set nombre = '$nombre', descripcion = '$descripcion' WHERE id=$id";
    mysqli_query($conexion, $query);

    header('Location: panel.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
   <center><h1>Editar Publicacion</h1></center>
   <form method="POST">
   <input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>">
   <input class="form-control" type="text" name="descripcion" value="<?php echo $descripcion; ?>">
   Categoria: <select name="cat" id="cat">
   <option value="Tecnologia">Tecnologia</option>
   <option value="Hogar">Hogar</option>
   <option value="Joyeria">Joyeria</option>
   <option value="Electrodomesticos">Electrodomesticos</option>
   </select><br><br>

  <center> <button class="btn btn-primary" name="update">Guardar</button>
            <a  class="btn btn-danger" href="panel.php">Cancelar</a>
  </center>
   </form>
</body>
</html>