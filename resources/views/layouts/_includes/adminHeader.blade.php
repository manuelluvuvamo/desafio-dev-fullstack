<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo')</title>

   
    {{-- EndFavicons --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">

    <link rel="stylesheet" href="/css/select2.css">
    <link rel="stylesheet" href="/css/select2-bootstrap4.css">

    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="/css/fontfamily.css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/datatables/dataTables.bootstrap4.min.css">

   
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Start Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- itens a direita do menu -->
                <li class="nav-item ">
                    <a class="nav-link text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Terminar a Sessão
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                <!-- End itens a direita do menu -->

            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @if (null !== Auth::user())

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
             
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->

                    <div class=" row justify-content-center col-12 user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            {{-- <img src="/dist/img/1_6888.png"
                                class="img-circle elevation-2" alt="User Image"> --}}
                        </div>

                        <div class="info col-sm-12">
                            <a href="#" class="d-block text-center">{{ Auth::user()->vc_primemiroNome }}
                                {{ Auth::user()->vc_apelido }}</a>
                        </div>
                        <div class="info col-sm-12 ">
                            <a href="#" class="d-block text-center">{{ Auth::user()->vc_tipoUtilizador }}</a>
                        </div>

                    </div>

                    <!-- Sidebar Menu -->

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                <li class="nav-header">Utilizadores</li>
                                <li class="nav-item has-treeview ">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            Utilizadores
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                            <li class="nav-item">
                                                <a href="{{ url('admin/users/cadastrar') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Cadastrar Utilizador</p>
                                                </a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                            <li class="nav-item">
                                                <a href="{{ url('admin/users/listar') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Lista de Utilizadores</p>
                                                </a>
                                            </li>
                                        
                                        @endif

                                    </ul>
                                    <li class="nav-header">Transações</li>
                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-funnel-dollar"></i>
                                            <p>
                                                Transações
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/transacoes/cadastrar') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Cadastrar Transações</p>
                                                    </a>
                                                </li>
                                            @endif
                                            @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/transacoes/listar') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Lista de Transações</p>
                                                    </a>
                                                </li>
                                            
                                            @endif
    
                                        </ul>


                                    <li class="nav-header">Lojas</li>
                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-funnel-dollar"></i>
                                            <p>
                                                Lojas
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/lojas/cadastrar') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Cadastrar Lojas</p>
                                                    </a>
                                                </li>
                                            @endif
                                            @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/lojas/listar') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Lista de Lojas</p>
                                                    </a>
                                                </li>
                                            
                                            @endif
    
                                        </ul>
                          


                          


                     
                       
                        


    

        @endif

        <br>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
    @endif
