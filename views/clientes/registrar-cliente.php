<?php require_once '../../app/config/App.php'; ?>

<?php require_once "../includes/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Nuevo Cliente", "Lista de clientes", SERVERURL . "views/clientes/listar-clientes") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Contenido personalizado -->
        <div class="col-md-12">
          <!-- FILA 1 -->
          <form action="" id="formulario-clientes" autocomplete="off">
            <div class="card card-outline card-primary">
              <div class="card-header">
                Complete los datos
              </div>
              <div class="card-body">
                <!-- FILA 1 -->
                <div class="row">
                  <div class="col-md-4 form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" autofocus required>
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="apellidos">Nombres</label>
                    <input type="text" class="form-control" id="nombres" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="apellidos">Telefono</label>
                    <input type="tel" class="form-control text-center" minlength="9" maxlength="9" id="telefono" required>
                  </div>
                </div>
                <!-- FIN FILA 1 -->
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
              </div>
            </div> <!-- ./card -->
          </form>
        </div> <!-- ./col-md-12 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once "../includes/footer.php"; ?>

<script>
  document.addEventListener("DOMContentLoaded", ()=>{
    document.querySelector("#formulario-clientes").addEventListener("submit", async (e)=>{
      e.preventDefault()
      if(await ask("¿Desea guardar?", "Clientes")){
        //Algoritmo para guardar
        //GET = URLSearchParams()
        //POST = FormData()
        showToast("Guardado correctamente", "SUCCESS", 1000, "./listar-clientes")
      }
    })
  })
</script>

</body>

</html>