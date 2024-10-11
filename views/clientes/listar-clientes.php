<?php require_once '../../app/config/App.php'; ?>

<?php require_once "../includes/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Clientes", "Inicio", SERVERURL . "views") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="./registrar-cliente" class="btn btn-primary btn-sm">Registrar</a>
          <hr>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <th>#</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Telefono</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Avalos Romero</td>
                  <td>Royer Alexis</td>
                  <td>973189350</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Avalos Romero</td>
                  <td>Royer Alexis</td>
                  <td>973189350</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Avalos Romero</td>
                  <td>Royer Alexis</td>
                  <td>973189350</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Avalos Romero</td>
                  <td>Royer Alexis</td>
                  <td>973189350</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Avalos Romero</td>
                  <td>Royer Alexis</td>
                  <td>973189350</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once "../includes/footer.php"; ?>

</body>

</html>