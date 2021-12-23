@extends('layouts.admin')

@section('titulo', 'Ano Lectivo/Cadastrar')

 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Cadastrar Ano Lectivo</h3>
        </div>
    </div>
    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('ano'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Ano Lectivo Inexistente',
        })
    </script>
@endif


 

    <div class="card">
        <div class="card-body">
         

            <form action="{{ route('admin/anolectivo/cadastrar') }}" method="post" class="row">
                @csrf
                @include('forms._formAnoLectivo.index')
                <div class="form-group col-sm-4">
                    <label for="" class="text-white form-label">.</label>
                    <button class="form-control btn btn-dark">Cadastrar</button>
                </div>
            </form>

        </div>
    </div>
    <!-- sweetalert -->
    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('aviso'))
        <script>
            Swal.fire(
                'Falha ao inserir o Ano lectivo !',
                '',
                'error'
            )

        </script>
    @endif
    @include('admin.layouts.footer')

@endsection

