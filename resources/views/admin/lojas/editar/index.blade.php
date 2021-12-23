@extends('layouts.admin')

@section('titulo', 'Editar Loja')

@section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Editar Loja</h3>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <form form action="{{ route('admin.lojas.atualizar', $loja->id) }}" method="post" class="row">
                @method('put')
                @csrf
                @include('forms._formLoja.index')
                <div class="col-md-12 py-1  text-center  d-flex justify-content-center">
                    <input type="submit" class="col-md-2 btn btn-dark" value="Confirmar alterações">
                </div>
            </form>
        </div>
    </div>
    <!-- sweetalert -->
    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('status'))
        <script>
            Swal.fire(
                'Dados Actualizados com sucesso',
                '',
                'success'
            )

        </script>
    @endif
    @if (session('aviso'))
        <script>
            Swal.fire(
                'Falha ao actualizar os dados!',
                '',
                'error'
            )

        </script>
    @endif
  

@endsection
