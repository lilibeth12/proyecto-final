<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas./dist/css/adminlte.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  
  
  

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"crossorigin="anonymous"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>


  

  <!-- aweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="vistas./dist/css/custom/css/login.css">
</head>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>



<body>
<!-- Site wrapper -->

  <?php 

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
    echo '<div class="hold-transition sidebar-collapse sidebar-mini">';
    echo '<div class="wrapper">';
  
    include"modulos/cabezote.php";
    include"modulos/menu.php";

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio"  ||
        $_GET["ruta"] == "usuarios"  ||
        $_GET["ruta"] == "categorias"  ||
        $_GET["ruta"] == "productos"  ||
        $_GET["ruta"] == "clientes"  ||
        $_GET["ruta"] == "ventas"  ||
        $_GET["ruta"] == "crear-ventas"  ||
        $_GET["ruta"] == "reportes" ||
        $_GET["ruta"] == "salir" ){

        include"modulos/".$_GET["ruta"].".php";

      }else{

        include"modulos/404.php";
        
      }

    }else{
      include"modulos/inicio.php";
    }

    include"modulos/footer.php";
    echo '</div>';
    echo'</div>';

  }else{
    echo '<div class="login">';
    include"modulos/login.php";
    echo '</div>';
  }
  
  ?>

</navbar>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>

</body>
</html>
