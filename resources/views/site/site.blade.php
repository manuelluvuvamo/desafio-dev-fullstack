<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@isset($cabecalho){{ $cabecalho->vc_acronimo }} @else error @endisset</title>
    <link rel="icon" type="image/x-icon" href="images/logotipo/logo.png" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/siteInicial/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    @isset($cabecalho)
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="images/logotipo/{{ $cabecalho->vc_logo }}.png" class="rounded float-start" width="80">
                    {{ $cabecalho->vc_escola }}
                    </a>

            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="home">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">{{ $cabecalho->vc_acronimo }}</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">{{ $cabecalho->vc_escola }}</h2>
                    <a class="btn bg-white" href="{{ url('candidatura/get') }}"><b>Candidatar-se</b></a>
                </div>
            </div>
        </header>

        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
                            src="images/siteInicial/bg-masthead.jpg" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>{{ $cabecalho->vc_acronimo }}</h4>
                            <p class="text-black-50 mb-0">
                                <b>{{ $cabecalho->vc_republica }}</b><br>
                                <b>{{ $cabecalho->vc_ministerio }}</b><br>
                                <b>NIF: </b>{{ $cabecalho->vc_nif }}<br>
                                <b>Telefone: </b>{{ $cabecalho->it_telefone }}<br>
                                <b>Email: </b>{{ $cabecalho->vc_email }}<br>
                                <b>Endereço: </b>{{ $cabecalho->vc_endereco }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid " src="images/siteInicial/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-dark text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">{{ $cabecalho->vc_ministerio }}</h4>
                                    <p class="mb-0 text-white">"A educação exige os maiores cuidados, porque influi sobre
                                        toda a vida."</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Signup-->


        <!-- Footer-->
        @include('admin.layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="js/datatables/jquery-3.5.1.js"></script>
        <script src="/css/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/siteInicial/scripts.js"></script>
        <!-- sweetalert -->
        <script src="js/sweetalert2.all.min.js"></script>

        @if (session('status'))
            <script>
                Swal.fire(
                    'Candidatura efectuada com sucesso!',
                    'Peça o seu comprovativo de inscrição!',
                    'success'
                )

            </script>
        @endif
        @if (session('aviso'))
            <script>
                Swal.fire(
                    'Erro ao efectuar a Candidatura!',
                    'Já esta inscrito neste ano lectivo',
                    'error'
                )

            </script>
        @endif
        @if (session('activadoroff'))
            <script>
                Swal.fire(
                    'Erro!',
                    'Não estão abertas as candidaturas',
                    'info'
                )

            </script>
        @endif

    @else
        <script src="js/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire(
                ' Erro!',
                'Escola não foi cadastrada',
                'error'
            )

        </script>
    @endisset
</body>

</html>
