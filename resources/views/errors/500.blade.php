<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>500</title>
    {{-- Favicons --}}
    <link href="/images/logotipo/logo.png" rel="icon">
    {{-- EndFavicons --}}

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
    <!-- Google Font: Source Sans Pro -->
    <link href="/css/fontfamily.css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/datatables/dataTables.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini ">

    <div class="content">
        <div class="col-12">
            <!-- Main content -->
            <section class="content mt-5">
                <div class="error-page" style="margin-top: 250px">
                    <h2 class="headline text-warning"> 500</h2>

                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Erro no servidor.</h3>

                        <p>
                            Um erro aconteceu no servidor. Enquanto isso, você pode
                            retornar ao painel
                        </p>

                        <a type="button" href="{{ url('/') }}"
                            class="btn btn-dark form-control col-4 text-center ml-5">voltar ao painel</a>
                    </div>
                    <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
            </section>
            <!-- /.content -->
        </div>
    </div>

</body>
