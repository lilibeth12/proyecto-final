<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="main-panel">
  <style>
     .lineb{
          border-bottom: 5px #39478E solid;
          margin-bottom: 40px;
        }
  </style>

  <section class="content-header lineb">
    
    <h1>
      
      Reportes de ventas
    
    </h1>
    

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active" style="padding-left:15px">Reportes de ventas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header  with-border">
          <div class="form-row d-flex justify-content-between">
            <div class="form-group col-md-6">
            <button type="button" class="btn btn-default" id="daterange-btn2">
            
          
          
           
            <span>
              <i class="fa fa-calendar"></i> 

              <?php

                if(isset($_GET["fechaInicial"])){

                  echo $_GET["fechaInicial"]." - ".$_GET["fechaFinal"];
                
                }else{
                 
                  echo 'Rango de fecha';

                }

              ?>
            </span>

            <i class="fa fa-caret-down"></i>

          </button>
          </div>

        <div class="box-tools pull-right">

        <?php

        if(isset($_GET["fechaInicial"])){

          echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte&fechaInicial='.$_GET["fechaInicial"].'&fechaFinal='.$_GET["fechaFinal"].'">';

        }else{

           echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte">';

        }         

        ?>
           
           <div class="form-group   ">
             <button class="btn btn-success "   >Descargar reporte en Excel <i class="fas fa-file-excel ml-1"></i></button>
           </div>

          </a>

        </div>
        </div>
      </div>



      <div class="box-body">
        
        <div class="row">

          <div class="col-xs-12">
            
            <?php

            include "reportes/grafico-ventas.php";

            ?>

          </div>

          


            <div class="col-md-6 col-xs-12">
             
                  <?php

                  include "reportes/vendedores.php";

                  ?>

           </div>

           <div class="col-md-6 col-xs-12">
             
            <?php

            include "reportes/compradores.php";

            ?>

           </div>

           <div class=" col-xs-12">
             
             <?php
 
             include "reportes/productos-mas-vendidos.php";
 
             ?>
 
            </div>
          
        </div>

      </div>
      
    </div>

  </section>
 
 </div>
