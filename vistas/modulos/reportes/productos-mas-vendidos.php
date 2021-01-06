<?php

$item = null;
$valor = null;
$orden = "ventas";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$colores = array("red", "green", "yellow", "pink", "purple", "blue" , "orange", "gray");

$totalVentas = ControladorProductos::ctrMostrarSumaVentas();


?>

<!-- productos mas vendidos -->

<div class="box box-default border border rounded mt-2 mb-3 p-3">

    <div class="box-header with-border">

        <h3 class="box-title">Productos más vendidos</h3>

    </div>

    <div class="box-body">

        <div class="row">

            <div class="col-md-5 align-self-center">

                <div class="chart-responsive">

                    <canvas id="pieChart" height="150"></canvas>

                </div>

            </div>

            <div class="col-md-7">

                <ul class="chart-legend clearfix">

                    <?php

                    for ($i = 0; $i < 8; $i++) {

                        echo ' <li><i class="fas fa-circle fa-1x text-' . $colores[$i] . '"></i> ' . $productos[$i]["descripcion"] . '</li>';
                    }


                    ?>


                </ul>

            </div>

        </div>

    </div>

    <div class="box-footer no-padding">

        <div class="mostselled-products">
            <!-- nav nav-pills nav-stacked -->

            <?php
            // echo '<ul class="list-group w-100">';
            for ($i = 0; $i < 6; $i++) {

                echo '<div class="mostselled-products__item">
						 
                         <div class="mostselled-products__image product-image">
                            <img src="vistas/dist/img/icons/product.svg" class="product-image__error">
                            <img src="' . $productos[$i]["imagen"] . '">
                        </div>

                        <div class="percentage">
                            <div class="percentage-description">
                                <span>' . $productos[$i]["descripcion"] . '</span>
                                <span class="text-' . $colores[$i] . '">' . ceil($productos[$i]["ventas"] * 100 / $totalVentas["total"]) . '%</span>
                            </div>
                            <div class="percentage-bar">
                                <div class="percentage-bar__active text-' . $colores[$i] . '" style="width: ' . ceil($productos[$i]["ventas"] * 100 / $totalVentas["total"]) . '%; background-color: currentColor"></div>
                            </div>
                        </div>

                    </div>';
            }
            ?>


        </div>

    </div>

</div>

<!-- <script>console.log("'.$productos[$i]["imagen"].'")</script> -->

<script>
    // -------------
    // - PIE CHART -
    // -------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [

        <?php

        for ($i = 0; $i < 8; $i++) {

            echo "{
      value    : " . $productos[$i]["ventas"] . ",
      color    : '" . $colores[$i] . "',
      highlight: '" . $colores[$i] . "',
      label    : '" . $productos[$i]["descripcion"] . "'
    },";
        }

        ?>
    ];
    var pieOptions = {
        // Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        // String - The colour of each segment stroke
        segmentStrokeColor: '#fff',
        // Number - The width of each segment stroke
        segmentStrokeWidth: 1,
        // Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        // Number - Amount of animation steps
        animationSteps: 100,
        // String - Animation easing effect
        animationEasing: 'easeOutBounce',
        // Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        // Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: false,
        // Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: false,
        // String - A legend template
        legendTemplate: '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
        // String - A tooltip template
        tooltipTemplate: '<%=value %> <%=label%>'
    };
    // Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
    // -----------------
    // - END PIE CHART -
    // -----------------
</script>