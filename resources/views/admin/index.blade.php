@extends('layouts.admin')

@section('titulo', 'Página Principal')

@section('conteudo')

    <div class="card mt-3">
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-8">
                        @isset($cabecalho->vc_escola)
                            <h3>
                                {{ $cabecalho->vc_escola . ' - ' . $cabecalho->vc_acronimo }}
                            </h3>
                        @endisset
                    </div>
                    <div class="col-md-4 text-right">
                        @isset($AnoLectivo)
                            <h3>
                                <b>{{ $AnoLectivo }}</b>
                            </h3>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->





 



    
@endsection
