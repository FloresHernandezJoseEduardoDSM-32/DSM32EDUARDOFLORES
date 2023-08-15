<?php
include('./../../test.php');
require ('./../../layout/menu.php');
require ('./../../layout/header.php');
?>

<!--inicia formulario-->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Alta estadodeequipo</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <form action="" method="post">
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label" for="">Nombre:</label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="">Apellido paterno:</label>
                        <input class="form-control" type="text" name="price" id="">
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="">Apellido materno</label>
                        <input class="form-control" type="text" name="stok" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label" for="">Contraseña</label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="">Email</label>
                        <input class="form-control" type="text" name="price" id="">
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="">Telefono</label>
                        <input class="form-control" type="text" name="stok" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <label class="form-label" for="">No.Exteriror</label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="">No.Interior</label>
                        <input class="form-control" type="text" name="price" id="">
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="">Coigo Postal</label>
                        <input class="form-control" type="text" name="stok" id="">
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="">Calle</label>
                        <input class="form-control" type="text" name="stok" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <select class="form-select" aria-label="Default select example">
                            <option value="">Estado</option>
                            <option value="">México</option>
                            <option value="">Morelia</option>
                            <option value="">Puebla</option>
                            <option value="">Hidalgo</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <select class="form-select" aria-label="Default select example">
                            <option value="">Municipio</option>
                            <option value="">Acambay</option>
                            <option value="">Acolman</option>
                            <option value="">Almoloya de Alquisiras</option>
                            <option value="">Almoloya de Juárez</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>

                </div>
            </div>
        </form>

    </div>
    <!-- Page Heading -->





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