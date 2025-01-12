<?php
session_start();
include("template/header.php");
?>
<div class="container">
  <div class="row">
    <div class="col-md-6 p-5">
      <div class="card">
        <div class="card">
          <div class="card-header">Registro de usuarios</div>
          <div class="card-body">
            <form method="POST">
              <div class="form-group py-3">
                <label for="usuarioAdmin">Usuario: </label>
                <input type="text" class="form-control" name="usuario" required placeholder="Introduce usuario" />
              </div>
              <div class="form-group py-3">
                <label for="usuarioAdmin">Correo electrónico: </label>
                <input type="text" class="form-control" name="email" required placeholder="Introduce tu correo electrónico" />
              </div>
              <div class="form-group py-3">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" required placeholder="Contraseña" />
              </div>
              <div class="form-group py-3">
                <label for="password">Confirmación contraseña:</label>
                <input type="password" class="form-control" name="password" required placeholder="Vuelve a introducir tu contraseña" />
              </div>
              <div class="py-3">
                <button type="submit" class="btn btn-primary">
                  Registro
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("template/footer.php");
?>