<?php
include('./../../test.php');
include ('./../../layout/menu.php');
include("./../../layout/header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cliente</h1>
    <a href="../cliente/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
        <th scope="col">Nombres</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col"></th>
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Flores</td>
        <th scope="col">Hernandez</th>
        <th scope="col">Jose Eduardo</th>
        <th scope="col">7228868372</th>
        <th scope="col">Lerma Edo.Mex</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/cliente/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/cliente/edit.php'?>">
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
        <td>Marin</td>
        <th scope="col">De la cruz</th>
        <th scope="col">Jaquelinne</th>
        <th scope="col">7226505292</th>
        <th scope="col">Lerma Edo.Mex</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/cliente/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/cliente/edit.php'?>">
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
        <td>Velez</td>
        <th scope="col">Mendez</th>
        <th scope="col">Jorge Alberto</th>
        <th scope="col">7228868372</th>
        <th scope="col">Lerma Edo.Mex</th>
        <th scope="col"></th>
       
      
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/cliente/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/cliente/edit.php'?>">
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
