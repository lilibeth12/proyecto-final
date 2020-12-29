<div class="main-panel">
    <section class="content-header">

        <h1>
            Panel de Control</h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Tablero</li>

        </ol>

    </section>

    <section class="content">

        <div class="summary-cards">

            <?php

            if ($_SESSION["perfil"] == "Administrador") {

                include "inicio/cajas-superiores.php";
            }

            ?>

        </div>

        <div class="row">

            <div class="col-lg-12 col-md-offset-4">

                <?php

                if ($_SESSION["perfil"] == "Administrador") {

                    include "reportes/grafico-ventas.php";
                }

                ?>

            </div>

            <div class="col-lg-12">

                <?php

                if ($_SESSION["perfil"] == "Administrador") {

                    include "reportes/productos-mas-vendidos.php";
                }

                ?>

            </div>

            <div class="col-lg-12">

                <?php

                if ($_SESSION["perfil"] == "Administrador") {

                    include "inicio/productos-recientes.php";
                }

                ?>

            </div>

            <div class="col-lg-12">

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