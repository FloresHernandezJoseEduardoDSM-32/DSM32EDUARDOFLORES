<?php
include('./../../test.php');
include ('./../../layout/menu.php');
include("./../../layout/header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Municipio</h1>
    <a href="../municipio/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i></a>
  </div>
<!--Tabla-->
<center>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Colonia</th>
        <th scope="col">Num.interior</th>
        <th scope="col">Num.exterior</th>
        <th scope="col">Estado</th>
        <th scope="col">Localidad</th>
        <th scope="col"></th>
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Ameyalco</td>
        <th scope="col">28</th>
        <th scope="col">28</th>
        <th scope="col">Estado de Mexico</th>
        <th scope="col">Toluca</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/municipio/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/municipio/edit.php'?>">
                <button class="btn btn-warning" type="button">
                  <i class="fas fa-pen fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <button class="btn btn-danger" type="button">
                <i class="fas fa-trash fa-sm text-white-50"></i></a>

              </button>
            </div>
          </div>

        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Atarasquillo</td>
        <th scope="col">13</th>
        <th scope="col">04</th>
        <th scope="col">Estado de Mexico</th>
        <th scope="col">Toluca</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/municipio/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/municipio/edit.php'?>">
                <button class="btn btn-warning" type="button">
                  <i class="fas fa-pen fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <button class="btn btn-danger" type="button">
                <i class="fas fa-trash fa-sm text-white-50"></i></a>

              </button>
            </div>
          </div>

        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <th scope="col">Lerma</th>
        <th scope="col">19</th>
        <th scope="col">04</th>
        <th scope="col">Estado de Mexico</th>
        <th scope="col">Toluca</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/municipio/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/municipio/edit.php'?>">
                <button class="btn btn-warning" type="button">
                  <i class="fas fa-pen fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <button class="btn btn-danger" type="button">
                <i class="fas fa-trash fa-sm text-white-50"></i></a>

              </button>
            </div>
          </div>

        </td> 
      </tr>
    </tbody>
  </table>
</center>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
    include("./../../layout/footer.php");
?>
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
