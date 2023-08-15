<?php
include('./../../test.php');
include ('./../../layout/menu.php');
include("./../../layout/header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Provedor</h1>
    <a href="../provedor/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i></a>
  </div>
<!--Tabla-->
<center>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Apellido P</th>
        <th scope="col">Apellido M</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Municipio</th>
        <th scope="col">Estado</th>
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Santos</td>
        <th scope="col">Gutierrez</th>
        <th scope="col">Ismael</th>
        <th scope="col">Hidalgo no.21</th>
        <th scope="col">Almoloya</th>
        <th scope="col">Mexico</th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/provedor/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/provedor/edit.php'?>">
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
        <td>Cruz</td>
        <th scope="col">Ramirez</th>
        <th scope="col">Melissa</th>
        <th scope="col">Allende no.12</th>
        <th scope="col">Lerma</th>
        <th scope="col">Mexico</th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/provedor/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/provedor/edit.php'?>">
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
        <th scope="col">Sanchez</th>
        <th scope="col">Perez</th>
        <th scope="col">Raul</th>
        <th scope="col">Zaragoza no.32</th>
        <th scope="col">Lerma</th>
        <th scope="col">Mexico</th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/provedor/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/provedor/edit.php'?>">
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
