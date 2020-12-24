<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>




  <!-- AdminLTE  -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

   <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">


  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>

  
  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

 <!-- jQuery Number -->
 <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>


 
  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="vistas./dist/css/custom/css/login.css">
  <link rel="stylesheet" href="vistas./dist/css/custom/layouts/main.css">
</head>

</head>



<body>
	<!-- Site wrapper -->

	<?php

	if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
		echo '<div class="main">';
		echo '<div class="main-wrapper">';

		include "modulos/cabezote.php";
		include "modulos/menu.php";

		
		if(isset($_GET["ruta"])){

			if($_GET["ruta"] == "inicio" ||
			   $_GET["ruta"] == "usuarios" ||
			   $_GET["ruta"] == "categorias" ||
			   $_GET["ruta"] == "productos" ||
			   $_GET["ruta"] == "clientes" ||
			   $_GET["ruta"] == "ventas" ||
			   $_GET["ruta"] == "crear-venta" ||
			   $_GET["ruta"] == "editar-venta" ||
         $_GET["ruta"] == "reportes" ||
			   $_GET["ruta"] == "salir"){

			

			include "modulos/".$_GET["ruta"].".php";
			
			}else{
				include "modulos/404.php";
			}

		} else {
			include "modulos/inicio.php";
		}

		include "modulos/footer.php";
		echo '</div>';
		echo '</div>';
	} else {
		echo '<div class="login">';
		include "modulos/login.php";
		echo '</div>';
	}

	?>



</navbar>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->

	<script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/categorias.js"></script>
  <script src="vistas/js/productos.js"></script>
  <script src="vistas/js/clientes.js"></script>
  <script src="vistas/js/ventas.js"></script>

</body>

</html>