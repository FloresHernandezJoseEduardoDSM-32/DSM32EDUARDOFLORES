<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto integrador</title>

    <!-- Custom fonts for this template-->
    <link href="<?=$h->get['base_url'].'/EduardoFloresDSM32/vendor/fontawesome-free/css/all.min.css" rel="stylesheet '?>">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template-->
       
    <link href="<?=$h->get['base_url'].'/styles/css/sb-admin-2.min.css" rel="stylesheet '?>">
        
<!-- icons -->
<script src="https://kit.fontawesome.com/7a66a4eab9.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a66a4eab9.js" crossorigin="anonymous"></script>
</head>
<!-- importamos nuestro layout -->

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ProyectSoft<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
                <a class="nav-link" href="https://localhost/EduardoFloresDSM32">
                    <i class="fas fa-sharp fa-tachometer-alt"></i>
                    <!-- <i class="fa-sharp fa-light fa-house"></i>-->
                    <span>inicio</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
           
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/view/categoriaproducto/index.php'?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Categoria</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/view/cliente/index.php'?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cliente</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/view/municipio/index.php'?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Municipio</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/view/piezas/index.php'?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Piezas</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/view/estadoequipo/index.php'?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Estado del Equipo</span></a>
            </li>
            

            <a class="nav-link" href="<?=$h->get['base_url'].'/view/provedor/index.php'?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Provedor</span></a>
            
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            

            <!-- Sidebar Toggler (Sidebar) botn para barra  -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

            

        </ul>
        <!-- End of Sidebar -->