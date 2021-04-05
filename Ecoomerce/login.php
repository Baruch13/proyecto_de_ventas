<?php
/*
Te voy a dar unos consejos.
Siempre si vas a tener php y html en un mismo archivo, meté el código php arriba y luego
el html abajo, así luego no debes buscar código por todos lados.
Otra cosa; Si vas a manejar sesiones el session_start() lo debes incluir en todos los archivos
en la primer linea, siempre así.
ahora lo siguiente. Te es mejor usar un id como referencia de sesión, pero está bien que uses el usuaro

*/
session_start();
include("config.php");
if (isset($_POST['listo'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $ver = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'");
    $ins = $ver->num_rows;
    if($ins == 1){
        $_SESSION['usuario'] = $usuario;//mira aqui bro
        header("Location:panel.php");
    } else {
        echo "<script>";
        echo "alert('No Tienes Acceso')";
        echo "</script>";
    }
}
//que si bro entiendo si para redirijir a otras paginas
// Tal y cual como está acá está muy ok bro lo tengo en cuenta aveces no se googlear exactamente
//si aveces no se como expresarme jsj ok bro las dejare graciaaaasss xddddd ok hay vot
/* 
esta condicion lo que hace son dos cosas
1. la función isset() es una función para validar si algo existe, entonces lo que está haciendo
es validar si $_SESSION['usuario'] existe (es importante saber eso porque si después hay un $_SESSION['email'] por ej, no te va a validar eso)
2. $_SESSION['usuario'] === '' está validando si está vacio
3. || <- esas lineas significan "o" o sea, si no existe O está vacío la variable $_SESSION['usuario'] haz lo siguiente
*/

// este trozo te va a servir para que vos valides que no existe la sesión, entonces esto lo tenes que poner en lo lugare que no queres que entre
// a menos que se hayan logueado
// aún no terminamos :'v, me siento un profesor
// estoy en panel.php
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
    <h2>Inicia Secion</h2>
     <form method="POST">
     <input id="form-lg"  placeholder="Usuario" class="form-control" type="text" name="usuario">
     <input id="form-lg" placeholder="Clave" type="password" name="clave" class="form-control"><br><br>
     <button class="btn btn-primary" name="listo">Listo</button>
     <a href="index.php" class="btn btn-danger">Cancelar</a>

    </form>
    </center>
</body>
</html>