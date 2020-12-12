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

   <!-- DataTables -->
   <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  
  

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>
   <!-- DataTables -->
   <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

</head>



<body class="hold-transition sidebar-collapse sidebar-mini">
<!-- Site wrapper -->




  <?php 

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
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
    echo'</div>';

  }else{
    include"modulos/login.php";
  }
  
  ?>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->




</body>
</html>
