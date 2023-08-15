<?php
include('./../../test.php');
include ('./../../layout/menu.php');
include("./../../layout/header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Piezas</h1>
    <a href="../piezas/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i></a>
  </div>
<!--Tabla-->
<center>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre de la pieza</th>
        <th scope="col">Cantidad de piezas</th>
        <th scope="col">Numero de serie </th>
        <th scope="col">Precio </th>
        <th scope="col"></th>
        <th scope="col">Operaciones</th>
        <th scope="col"></th>
      </tr> 
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Pila dell</td>
        <th scope="col"> 5</th>
        <th scope="col">0122121221</th>
        <th scope="col">$15000</th>
       
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/piezas/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/piezas/edit.php'?>">
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
        <td>Ramm 32 gb</td>
        <th scope="col">3</th>
        <th scope="col">012311316</th>
        <th scope="col">$1306</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/piezas/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/piezas/edit.php'?>">
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
        <th scope="col">Teclado laptop hp</th>
        <th scope="col">4</th>
        <th scope="col">15-r005la 15-r 15-g 15-n 250</th>
        <th scope="col">$404</th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/piezas/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/piezas/edit.php'?>">
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
