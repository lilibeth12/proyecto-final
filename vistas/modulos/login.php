<div class="main-panel">
  
  <div class="login-logo">
    <img src="vistas/dist/img/company/logo.svg" alt="bonita-logo">
  </div>

  <div class="form">

    <div class="form-detail">
      <img src="vistas/dist/img/backgrounds/login-form.png" alt="detail-logo">
    </div>

    <div class="form-wrapper">

      <p>Iniciar sesión</p>

      <form method="post">

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>

        <?php
        $login = new ControladorUsuarios();
        $login->ctrIngresoUsuario();
        ?>
      </form>

    </div>
  
  </div>

</div>