<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Categoria</title>
</head>
<body>
        <center><h1>Nueva Categoria</h1>
        <form method="POST">
        <input  class="form-control" type="text" name="fkpublicaciones2" id="fkpublicaciones2" placeholder="Escriba el nombre de la categoria"><br><br>
        <button class="btn-primary" id="pub">Crear Categoria</button>
    <a class="btn btn-danger" href="panel.php">Cancelar</a>

        </form>
        </center>
        <?php  
        if(isset($_POST['pub'])){
            include("config.php");
        
        }

        ?>
</body>
</html>