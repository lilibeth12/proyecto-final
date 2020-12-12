<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Administar Usuarios
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a>Inicio</li>
            <li class="active">Tablero</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal"
                 data-target="#modalAgregarUsuario">Agregar Usuario</button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped tablas">
                 <thead>
                     <tr>
                     <th  estyle="width:10px">#</th>
                         <th>Nombre</th>
                         <th>Usuario</th>
                         <th>Foto</th>
                         <th>Perfil</th>
                         <th>Estado</th>
                         <th>Ultimo login</th>
                         <th>Acciones</th>

                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>1</td>
                         <td>Usuario Administrador</td>
                         <td>admin</td>
                         <td>#</td>
                         <td>Administrador</td>
                         <td><button class="btn btn-success btn-xs">Activado</button></td>
                         <td>2020-12-12 12:08:32</td>
                         <td>
                             <div class="btn-group">
                                 <button class="btn btn-warning"><i class="fa fa-pen"></i></button>
                                 <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                             </div>
                         </td>
                     </tr>
                 </tbody>

            </table>
        </div>
    </section>
</div>

 <!--==== Modal content=======-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">
      <div class="modal-header" style="background:#e83e8c; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
      <div class="modal-body">
         <div class="box-body">
            <!-- entrada para el nombre-->

             <div class="form-group">
                 <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                     <input type="text" class="form-control input-lg " name="nuevoNombre" 
                     placeholder="Ingresar nombre" required>
                     
                 </div>
             </div>
                 <!-- Modal usuario-->
             <div class="form-group">
                 <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-key"></i></span>
                     <input type="text" class="form-control input-lg " name="nuevoUsuario" 
                     placeholder="Ingresar Usuario" required>
                     
                 </div>
             </div>
               <!-- Modal contraseña-->
               <div class="form-group">
                 <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                     <input type="password" class="form-control input-lg " name="nuevoContraseña" 
                     placeholder="Ingresar Contraseña" required>
                     
                 </div>
             </div>
              <!-- Modal  crear perfil-->
              <div class="form-group">
                 <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-users"></i></span>
                        <select name="nuevoPerfil" id="#" class="form-control input.lg">
                            <option value="">Seleccionar Perfil</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Especial">Especial</option>
                            <option value="Vendedor">Vendedor</option>
                        </select>
                     
                 </div>
             </div>

             <!-- foto-->

             <div class="form-group">
                 <div class="panel">SUBIR FOTO</div>
                 <input type="file" id="nuevaFoto" name="nuevaFoto">
                 <p class="help-block"> Peso máximo de la foto 200 MB</p>
                 <img src="" alt="" class="img-thumbnail"  width="100px">
                
             </div>
             
             
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btb-default pull-left"   style="background:#e83e8c; color:white" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary" >Guardar Usuario</button>
      </div>
      </form>
    </div>

  </div>
</div>

