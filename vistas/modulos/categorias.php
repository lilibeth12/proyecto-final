<div class="main-panel">
<style>
  .name_prod{
        background:  #4957B8;
        color:white;
        width:10px;
        
    }

    .name_prod> th{
     font-size: 15px;
    }
    .lineb{
          border-bottom: 5px #39478E solid;
          margin-bottom: 40px;
        }
   
</style>


    <section class="content-header  lineb">

        <h1> Categorías</h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active" style="padding-left:15px">Categorías</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary agregar" style="margin-bottom:15px"data-toggle="modal" data-target="#modalAgregarCategoria">

                    Agregar categoría

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                    <thead>

                        <tr class="name_prod">

                            <th style="width:10px">#</th>
                            <th>Categoria</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $item = null;
                        $valor = null;

                        $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                        foreach ($categorias as $key => $value) {

                            echo ' <tr>

                    <td>' . ($key + 1) . '</td>

                    <td class="text-uppercase">' . $value["categoria"] . '</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCategoria" idCategoria="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pen"></i></button>

                        <button class="btn btn-danger btnEliminarCategoria" idCategoria="' . $value["id"] . '"><i class="fa fa-times"></i></button>

                        
                      </div>  

                    </td>

                  </tr>';
                        }

                        ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

<!-- agregar categoria -->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->

                <div class="modal-header" style="background:#4957B8; color:white">

                    <button type="button" class="close align-self-center" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Agregar categoría</h4>

                </div>

                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-th"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar categoría</button>

                </div>

                <?php

                $crearCategoria = new ControladorCategorias();
                $crearCategoria->ctrCrearCategoria();

                ?>

            </form>

        </div>

    </div>

</div>

<!-- ---------------------------------------editar------------------------------------------------------------------ -->

<div id="modalEditarCategoria" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!----------------------cabezera-------------------------------------- -->

                <div class="modal-header" style="background:#4957B8; color:white">

                    <button type="button" class="close align-self-center " data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Editar categoría</h4>

                </div>

                <!--------------------------------------------------body------------------------------------------------------------ -->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon align-self-center pr-2"><i class="fa fa-th"></i></span>

                                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>

                                <input type="hidden" name="idCategoria" id="idCategoria" required>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- -------------------------------------------pie------------------------------------------------------ -->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>

                </div>

                <?php

                $editarCategoria = new ControladorCategorias();
                $editarCategoria->ctrEditarCategoria();

                ?>

            </form>

        </div>

    </div>

</div>

<?php

$borrarCategoria = new ControladorCategorias();
$borrarCategoria->ctrBorrarCategoria();

?>