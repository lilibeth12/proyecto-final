<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelo/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelo/categorias.modelo.php";

class AjaxProductos{

  // codigo cat
  public $idCategoria;

  public function ajaxCrearCodigoProducto(){

  	$item = "id_categoria";
  	$valor = $this->idCategoria;

  	$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

  	echo json_encode($respuesta);

  }


  // editar producto

  public $idProducto;

  public function ajaxEditarProducto(){

    $item = "id";
    $valor = $this->idProducto;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

    echo json_encode($respuesta);

  }

}


// generar cod apartir de la cat
if(isset($_POST["idCategoria"])){

	$codigoProducto = new AjaxProductos();
	$codigoProducto -> idCategoria = $_POST["idCategoria"];
	$codigoProducto -> ajaxCrearCodigoProducto();

}


// editar producto

if(isset($_POST["idProducto"])){

  $editarProducto = new AjaxProductos();
  $editarProducto -> idProducto = $_POST["idProducto"];
  $editarProducto -> ajaxEditarProducto();

}





