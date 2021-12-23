@extends('layouts.site')
@section('conteudo')

    <div class="jumbotron jumbotron-fluid">
        @isset($cabecalho)
            <div class="text-center">
                <img src="/images/logotipo/{{ $cabecalho->vc_logo }}.png" alt="logo" width="100" height="100">
                <p class="lead"><b>{{ $cabecalho->vc_escola . ' - ' . $cabecalho->vc_acronimo }}</b></p>
                <p class="lead"> <b>Inscrições</b> para o Ano Lectivo <b>
                        @isset ($anoLectivo)
                            {{ $anoLectivo->ya_inicio . '-' . $anoLectivo->ya_fim }}
                        @endisset
                    </b>
                </p>
            </div>
            <h5><b>*</b> - Preenchimento obrigatório</h5>
            <h5><b>#</b> - Auto-Preenchimento</h5>
        @else
            <script src="/js/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire(
                    ' Erro!',
                    'Escola não foi cadastrada',
                    'error'
                )

            </script>
        @endisset

    </div>
    <div class="main">

        <div class="container">
            @if (isset($errors) && count($errors) > 0)
                <div class="text-center mt-4 mb-4 alert-danger">
                    @foreach ($errors->all() as $erro)
                        <h5>{{ $erro }}</h5>
                    @endforeach
                </div>
            @endif
            <div class="acc-wizard">
                <div class="panel-group" id="accordion">
                    <form method="post" action="{{ url('candidatura') }}">
                        @csrf
                        @include('site.forms._formCandidatura.index')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
