<?php
include('./../../test.php');
include ('./../../layout/menu.php');
include("./../../layout/header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categoria</h1>
    <a href="../categoriaproducto/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i></a>
  </div>
<!--Tabla-->
<center>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Categoria</th>
        <th scope="col">Marca</th>
        <th scope="col">Descripcion</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Laptop</td>
        <th scope="col">Mini PC HP Pro</th>
        <th scope="col">Mini 260 G9 - Intel Core i3-1215U - 8GB - 256GB SSD - Windows 11 Home</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/categoriaproducto/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/categoriaproducto/edit.php'?>">
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
        <td>Pc</td>
        <th scope="col">Dell</th>
        <th scope="col">Laptop Dell Inspiron 14R - 14" - Core i3 - 4GB - 500GB - Win 7 Home Premium - Negro</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/categoriaproducto/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/categoriaproducto/edit.php'?>">
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
        <th scope="col">PC gamer</th>
        <th scope="col">MacBook Pro - 13 </th>
        <th scope="col">MacBook Pro - 13 A Chip M2 - 16GB - 256GB SSD - macOS - Gris Espacial </th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <td>
          <div class="row">
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/categoriaproducto/show.php'?>">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-eye fa-sm text-white-50"></i>
              </a>

              </button>

            </div>
            <div class="col">
              <a href="<?=$h->get['base_url'].'/view/categoriaproducto/edit.php'?>">
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
