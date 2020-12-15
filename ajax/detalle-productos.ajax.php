<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";


class AjaxProductos{

//   GENERAR CODIGO APARTIR DE LA CATEGORIA
  public $idCategoria;

  public function ajaxCrearCodigoProducto(){

    $item = "id_categoria";
    $valor = $this->idCategoria;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

    echo json_encode($respuesta);

  }


// EDITAR PRODUCTO
  public $idProducto;

  public function ajaxEditarProducto(){

    $item = "id";
    $valor = $this->idProducto;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

    echo json_encode($respuesta);

  }

}


// generar codigo a partir de Id DE LA CATEGORIA

if(isset($_POST["idCategoria"])){

  $codigoProducto = new AjaxProductos();
  $codigoProducto -> idCategoria = $_POST["idCategoria"];
  $codigoProducto -> ajaxCrearCodigoProducto();

}
// editar-----------------------------------------------
if(isset($_POST["idProducto"])){

  $editarProducto = new AjaxProductos();
  $editarProducto -> idProducto = $_POST["idProducto"];
  $editarProducto -> ajaxEditarProducto();

}





