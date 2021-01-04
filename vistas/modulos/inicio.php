<div class="main-panel">
    <style>
         .lineb{
          border-bottom: 5px #39478E solid;
          margin-bottom: 40px;
        }
        .space{
          margin-bottom: 35px;
          

        }
    </style>
    <section class="content-header lineb">

        <h1>Panel de Control</h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active " style="padding-left:15px">Tablero</li>

        </ol>

    </section>

    <section class="content">

        <div class="summary-cards space ">

            <?php

            if ($_SESSION["perfil"] == "Administrador") {

                include "inicio/cajas-superiores.php";
            }

            ?>

        </div>

        <div class="row">

            <div class="col-lg-12 col-md-offset-4 space" >

                <?php

                if ($_SESSION["perfil"] == "Administrador") {

                    include "reportes/grafico-ventas.php";
                }

                ?>

            </div>

            <div class="col-lg-6 space">

                <?php

                if ($_SESSION["perfil"] == "Administrador") {

                    include "reportes/productos-mas-vendidos.php";
                }

                ?>

            </div>

            <div class="col-lg-6 space">

                <?php

                if ($_SESSION["perfil"] == "Administrador") {

                    include "inicio/productos-recientes.php";
                }

                ?>

            </div>

            <div class="col-lg-12 ">

                <?php

                if ($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor") {

                    echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' . $_SESSION["nombre"] . '</h1>

             </div>

             </div>';
                }

                ?>

            </div>

        </div>

    </section>
</div>