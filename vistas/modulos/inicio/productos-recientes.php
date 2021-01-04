<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

?>


<div class="box box box-default border border rounded mt-2 mb-3 p-3">

    <div class="box-header with-border">

        <h3 class="box-title">Productos agregados recientemente</h3>

        <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse">

                <i class="fa fa-minus"></i>

            </button>

            <button type="button" class="btn btn-box-tool" data-widget="remove">

                <i class="fa fa-times"></i>

            </button>

        </div>

    </div>

    <div class="box-body">

        <ul class="products-list product-list-in-box">

            <?php

            for ($i = 0; $i < 10; $i++) {

                echo '<li class="item">

        <div class="product-img product-image">
            <img src="vistas/dist/img/icons/product.svg" class="product-image__error">
            <img src="' . $productos[$i]["imagen"] . '" alt="Product Image">

        </div>

        <div class="product-info">

          <a href="" class="product-title">

            ' . $productos[$i]["descripcion"] . '

            <span class="btn btn-primary pull-right  ml-5 float-right text-right text-">$' . $productos[$i]["precio_venta"] . '</span>

          </a>
    
       </div>

      </li>';
            }

            ?>

        </ul>

    </div>

    <div class="box-footer text-center">

        <a href="productos" class="uppercase">Ver todos los productos</a>

    </div>

</div>