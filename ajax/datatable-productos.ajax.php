<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelo/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelo/categorias.modelo.php";


class TablaProductos{

 	// mostrar la tabla productos

	public function mostrarTablaProductos(){

		$item = null;
		$valor = null;
		$orden = "id";
		$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);	

		if(count($productos) == 0){

			echo '{"data": []}';

			return;
		}
	  
		$datosJson = '{
		"data": [';

		for($i = 0; $i < count($productos); $i++){

			// foto
		  
		  	$imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";

		//   id

		  	$item = "id";
		  	$valor = $productos[$i]["id_categoria"];

		  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		//   stock

  			if($productos[$i]["stock"] <= 10){

  				$stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";

  			}else if($productos[$i]["stock"] > 11 && $productos[$i]["stock"] <= 15){

  				$stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";

  			}else{

  				$stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";

  			}

		//   acciones

		if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

			$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pen'></i></button></div>"; 

		}else{

			 $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pen'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 

		}

   
		$datosJson .='[
			"'.($i+1).'",
			"'.$imagen.'",
			"'.$productos[$i]["codigo"].'",
			"'.$productos[$i]["descripcion"].'",
			"'.$categorias["categoria"].'",
			"'.$stock.'",
			"'.$productos[$i]["precio_compra"].'",
			"'.$productos[$i]["precio_venta"].'",
			"'.$productos[$i]["fecha"].'",
			"'.$botones.'"
		  ],';

	}

	$datosJson = substr($datosJson, 0, -1);

   $datosJson .=   '] 

   }';
  
  echo $datosJson;


}



}


// activar
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();

