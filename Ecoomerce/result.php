
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/index.css">
<!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="empresa.php">Empresa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Iniciar Sesion</a>
    </li>
  </ul>

  <div class="dropdown">
  <button class="dropbtn">Categorias</button>
  <div class="dropdown-content">
    <a href="tecnologia.php">Tecnologia</a>
    <a href="hogar.php">Hogar</a>
    <a href="#">Joyeria</a>
    <a href="#">Electrodomesticos</a>
  </div>
</div>
<form action="result.php" method="get">
  <input name="palabra"  type="text" placeholder="Buscar...">
  <button name="buscar" class="btn btn-success">Buscar</button>
  </form>
</nav>
      <?php
   if(isset($_GET['buscar'])){
     include("config.php");
     $palabra = $_GET['palabra'];
     $consulta = $conexion->query("SELECT * FROM publicaciones WHERE nombre LIKE '%$palabra%'");
     while($row = $consulta->fetch_array()){  
      $nombre = $row['nombre'];
      $descripcion = $row['descripcion'];
      $foto = $row['foto'];
      $cat = $row['cat'];
       
       ?>

    

    


<div class="gallery">
  <a target="_blank" href="#">
    <img src="<?php echo $foto; ?>">
  </a>
  <div class="desc"><h2><?php echo $row['nombre']; ?></h2> <center><button class="btn-primary">Ver</button></center></div>
  
</div>
<?php
}
   }
        
        ?>


<!-- Tarjetas -->

            
<head>
<style>
.dropbtn {
  height:30px;
  width:130px;
  background-color: #212529;
  color: #939d97;
  padding: 0px;
  font-size: 15px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #198754;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: ##198754}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #;
}
div.gallery {
  margin: 15px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
 
}
div.gallery img {
  width: 70%;
  height: auto;
  max-width: 1200px;
}
div.desc {
  padding: 25px;
  text-align: center;
}
img{
  width:500px;
  height:500px;
}
</style>
</head>



        <!-- Cierre de  Tarjetas -->



</body>
</html>