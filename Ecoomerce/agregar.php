<?php
// fijate a ver que onda  ok voy aaa ya
session_start();
if (!isset($_SESSION['usuario']) || trim($_SESSION['usuario']) === '') {
    $usuario = $_SESSION['usuario'];
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center>
   <h2>Nuevo Producto</h2>
   <br><br><br>
   <form method="POST" enctype="multipart/form-data">
   Nombre: <input id="put" class="form-control"  type="text" name="nombre"><br><br>
   Descripcion:<br>  <textarea name="descripcion" id="descripcion" cols="50" rows="7"></textarea><br><br>
   Categoria: <select name="cat" id="cat">
   <option value="Tecnologia">Tecnologia</option>
   <option value="Hogar">Hogar</option>
   <option value="Joyeria">Joyeria</option>
   <option value="Electrodomesticos">Electrodomesticos</option>
   </select><br><br>
    Imagen: <input type="file" id="foto" name="foto" value="Sube una imagen"><br><br>
    <input class="btn btn-primary" type="submit" name="subir" value="Publicar">
    <a class="btn btn-danger" href="panel.php">Cancelar</a>


    </form>
   </center>

   <style>
   #put{
       height:50px;
       width:450px;
   }
   </style>
    <?php
if (isset($_POST['subir'])) {
    include "config.php";
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cat = $_POST['cat'];

    $foto = $_FILES["foto"]["name"];
    $ruta = $_FILES["foto"]["tmp_name"];
    $destino = "fotos_publicaciones/" . $foto;
    copy($ruta, $destino);
    $insertar = $conexion->query("INSERT INTO publicaciones (nombre,foto,descripcion) VALUES ('$nombre','$destino','$descripcion')");
    if ($insertar) {

    }

}

?>

</body>
</html>