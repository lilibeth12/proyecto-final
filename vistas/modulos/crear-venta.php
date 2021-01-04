<?php

if ($_SESSION["perfil"] == "Especial") {

    echo '<script>

    window.location = "inicio";

  </script>';

    return;
}

?>

<div class="main-panel">
    <style>
        .crearventa {
            border-top: 5px #39478E solid;
        }

        input.cajatextventa {
            width: 100px !important;
            height: auto;
        }

        .tablaVentas {
            width: 100% !important;
        }

        td>img {

            height: 40px;
        }

        .name_prod {
            background: #4957B8;
            color: white;
        }

        .med {
            width: 55%;

        }
    </style>
    <section class="content-header">

        <h1>Crear venta</h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active" style="margin-left:15px">Crear venta</li>

        </ol>

    </section>

    <section class="content">

        <div class="row">

            <!-- formulario de ventas -->


            <div class="col-lg-5 col-xs-12 p-3 crearventa bg-light rounded-0">

                <div class="box box-success">

                    <div class="box-header with-border">

                    </div>

                    <form role="form" method="post" class="formularioVenta">

                        <div class="box-body">

                            <div class="box">

                                <!-- ENTRADA DEL VENDEDOR-->

                                <div class="form-group">

                                    <div class="input-group">

                                        <span class="input-group-addon  align-self-center pr-2"><i class="fa fa-user"></i></span>

                                        <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                                        <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>">

                                    </div>

                                </div>

                                <!-- ENTRADA DEL CÓDIGO =-->

                                <div class="form-group">

                                    <div class="input-group">

                                        <span class="input-group-addon  align-self-center pr-2"><i class="fa fa-key"></i></span>

                                        <?php

                                        $item = null;
                                        $valor = null;

                                        $ventas = ControladorVentas::ctrMostrarVentas($item, $valor);

                                        if (!$ventas) {

                                            echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly>';
                                        } else {

                                            foreach ($ventas as $key => $value) {
                                            }

                                            $codigo = $value["codigo"] + 1;



                                            echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="' . $codigo . '" readonly>';
                                        }

                                        ?>


                                    </div>

                                </div>

                                <!--ENTRADA DEL CLIENTE -->

                                <div class="form-group">

                                    <div class="input-group">

                                        <span class="input-group-addon  align-self-center pr-2"><i class="fa fa-users"></i></span>

                                        <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

                                            <option value="">Seleccionar cliente</option>

                                            <?php

                                            $item = null;
                                            $valor = null;

                                            $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                                            foreach ($categorias as $key => $value) {

                                                echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                                            }

                                            ?>

                                        </select>

                                        <span class="input-group-addon"><button type="button" class="btn btn-primary hidden-lg mr-1 ml-1" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>

                                    </div>

                                </div>

                                <!--ENTRADA PARA AGREGAR PRODUCTO-->

                                <div class="form-group row nuevoProducto">



                                </div>

                                <input type="hidden" id="listaProductos" name="listaProductos">

                                <!--BOTÓN PARA AGREGAR PRODUCTO-->

                                <!-- <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button> -->

                                <hr>

                                <div class="row">

                                    <!-- ENTRADA IMPUESTOS Y TOTAL -->

                                    <!-- <div class="col-xs-2 pull-right">
                    <div class="form-inline">

                      <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>
                      <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

                      <div class="form-group mr-5">
                          <span>IGV:</span>
                          <input type="number" min="0" max="18" class="form-control cajatextventa ml-2">
                      </div>
                      <div class="form-group ">
                      <span>Total:</span>
                          <input type="text"  class="form-control cajatextventa ml-2">
                      </div>

                    </div> -->
                                    <table class="table med ">

                                        <thead>

                                            <tr>
                                                <th>IGV</th>
                                                <th>Total</th>
                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>

                                                <td style="width: 50%">

                                                    <div class="input-group">

                                                        <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>

                                                        <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>

                                                        <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

                                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                                                    </div>

                                                </td>

                                                <td style="width: 50%">

                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                                                        <input type="text" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="00000" readonly required>

                                                        <input type="hidden" name="totalVenta" id="totalVenta">


                                                    </div>

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                            <hr>

                            <!-- ENTRADA MÉTODO DE PAGO-->

                            <div class="form-group row  med">

                                <div class="col-xs-6" style="padding-right:0px">

                                    <div class="input-group">

                                        <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                                            <option value="">Seleccione método de pago</option>
                                            <option value="Efectivo">Efectivo</option>
                                            <option value="TC">Tarjeta Crédito</option>
                                            <option value="TD">Tarjeta Débito</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="cajasMetodoPago"></div>

                                <input type="hidden" id="listaMetodoPago" name="listaMetodoPago">

                            </div>

                            <br>

                        </div>

                </div>

                <div class="box-footer">

                    <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

                </div>







                </form>

                <?php

                $guardarVenta = new ControladorVentas();
                $guardarVenta->ctrCrearVenta();

                ?>

            </div>

            <!-- LA TABLA DE productos -->

            <div class="col-lg-7 hidden-md hidden-sm hidden-xs  pl-3 ">

                <div class="box box-warning crearventa bg-light">

                    <div class="box-header with-border"></div>

                    <div class="box-body pt-1">

                        <table class="table table-bordered  table-striped dt-responsive tablaVentas ">

                            <thead class="name_prod">

                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Imagen</th>
                                    <th>Código</th>
                                    <th>Descripcion</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>

                            </thead>

                        </table>

                    </div>

                </div>


            </div>
        </div>


    </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--===================================== CABEZA DEL MODAL=====================================-->

                <div class="modal-header" style="background:#4957B8; color:white">

                    <button type="button" class="close align-self-center" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title ">Agregar cliente</h4>

                </div>

                <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL DOCUMENTO ID -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-key"></i></span>

                                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL EMAIL -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2 align-self-center pr-2"><i class="fa fa-envelope"></i></span>

                                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL TELÉFONO -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-phone"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA LA DIRECCIÓN -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-map-marker"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-calendar"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar cliente</button>

                </div>

            </form>

            <?php

            $crearCliente = new ControladorClientes();
            $crearCliente->ctrCrearCliente();

            ?>

        </div>

    </div>

</div>