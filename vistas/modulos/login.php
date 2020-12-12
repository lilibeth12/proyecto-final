<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
                <img src="" alt="">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresar al Sistema</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-4">
            <button type="submit" class="btn btn-primary  btn-block">Ingresar</button>
          </div>
         
        </div>

        <?php
            $login = new ControladorUsuarios();
            $login ->ctrIngresoUsuario();
        
        
        ?>
      </form>

    </div>
    
  </div>
 
</div>