<?php
// fijate a ver que onda  ok voy
session_start();
if (!isset($_SESSION['usuario']) || trim($_SESSION['usuario']) === '') {
    $_SESSION['usuario'] = $usuario;
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/panel.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    <center>
    <h2>Panel de Control</h2>
    </center>
    <div class="botones">
    <a class="btn btn-primary" href="agregar.php"> Nuevo Producto + </a>
    <a class="btn btn-success" href="nueva_cat.php">Nueva Categoria +</a>
    <a class="btn btn-danger" href="logout.php">Cerrar Sesion</a>


    </div>
    
    
   

        <table>
            <tr>
                <td><h2>ID</h2></td>
                <td><h2>Nombre</h2></td>
                <td><h2>Descripcion</h2></td>


            </tr>
            <?php
            include("config.php");
            $ver = $conexion->query("SELECT * FROM publicaciones" );
            if ($ver) { while ($mostrar = $ver->fetch_array()) {
                
            ?>
                <tr>
                <td><h4><?php echo $mostrar['id'] ?></h4></td>
                <td><h4><?php echo $mostrar['nombre'] ?></h4></td>
                <td><h4><?php echo $mostrar['descripcion'] ?></h4></td>
                <td><a href="editar.php?id=<?php  echo $mostrar['id']  ?>"> Editar </a></td>
                <td><a href="delete.php?id=<?php  echo $mostrar['id']  ?>"> Eliminar </a></td>
                </tr>
            <?php } } ?>


</table>
</body>
</html>