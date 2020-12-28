<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>


<a href="ventas" class="summary-card">
    <div class="summary-card__wrapper">
        <div class="summary-card__icon">
            <div class="summary-card__icon-circle">
                <i class="fa fa-list-ul" aria-hidden="true"></i>
            </div>
        </div>
        <div class="summary-card__content">

            <p>Ventas</p>
            <h3><?php echo number_format($ventas["total"], 2); ?></h3>

            <span>
                Más info <i class="fa fa-arrow-circle-right"></i>
            </span>
        </div>
    </div>
</a>

<a href="categorias" class="summary-card">
    <div class="summary-card__wrapper">
        <div class="summary-card__icon">
            <div class="summary-card__icon-circle">
                <i class="fa fa-th" aria-hidden="true"></i>
            </div>
        </div>
        <div class="summary-card__content">

            <p>Categorías</p>
            <h3><?php echo number_format($totalCategorias); ?></h3>

            <span>
                Más info <i class="fa fa-arrow-circle-right"></i>
            </span>
        </div>
    </div>
</a>

<a href="clientes" class="summary-card">
    <div class="summary-card__wrapper">
        <div class="summary-card__icon">
            <div class="summary-card__icon-circle">
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
        </div>
        <div class="summary-card__content">

            <p>Clientes</p>
            <h3><?php echo number_format($totalClientes); ?></h3>

            <span>
                Más info <i class="fa fa-arrow-circle-right"></i>
            </span>

        </div>
    </div>
</a>

<a href="productos" class="summary-card">
    <div class="summary-card__wrapper">
        <div class="summary-card__icon">
            <div class="summary-card__icon-circle">
                <i class="fa fa-tags" aria-hidden="true"></i>
            </div>
        </div>
        <div class="summary-card__content">

            <p>Productos</p>
            <h3><?php echo number_format($totalProductos); ?></h3>

            <span>
                Más info <i class="fa fa-arrow-circle-right"></i>
            </span>
        </div>
    </div>
</a>

<!-- <div class="col-lg-3 col-xs-6">

    <div class="small-box bg-green">

        <div class="inner">



        </div>

        <div class="icon">

            <i class="ion ion-clipboard"></i>

        </div>

        <a href="categorias" class="summary-card">

            Más info <i class="fa fa-arrow-circle-right"></i>

        </a>

    </div>

</div> -->
<!-- 
<div class="col-lg-3 col-xs-6">

    <div class="small-box bg-yellow">

        <div class="inner">



        </div>

        <div class="icon">

            <i class="ion ion-person-add"></i>

        </div>

        <a href="" class="small-box-footer">

            Más info <i class="fa fa-arrow-circle-right"></i>

        </a>

    </div>

</div> -->

<!-- <div class="col-lg-3 col-xs-6">

    <div class="small-box bg-red">

        <div class="inner">



        </div>

        <div class="icon">

            <i class="ion ion-ios-cart"></i>

        </div>

        <a href="" class="small-box-footer">

            Más info <i class="fa fa-arrow-circle-right"></i>

        </a>

    </div>

</div> -->