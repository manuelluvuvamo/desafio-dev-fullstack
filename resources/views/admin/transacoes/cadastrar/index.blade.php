@extends('layouts.admin')

@section('titulo', 'Cadastrar Transações')

 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h2>Cadastrar Transações</h2>
        </div>
    </div>
    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('teste'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Loja Inexistente',
        })
    </script>
@endif


    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/transacoes/salvar')}}" method="post" class="row"  enctype="multipart/form-data">
                @csrf

                @include('forms._formTransacao.index')

                <div class=" col-md-12 text-center d-flex justify-content-center ">
                    <button type="submit" class=" col-md-2 text-center btn btn-dark"> Cadastrar</button>
                </div>
               
            </form>
        </div>
    </div>
    <!-- sweetalert -->
    <script src="/js/sweetalert2.all.min.js"></script>

    @if (session('status'))
        <script>
            Swal.fire(
                'Transações Cadastradas',
                '',
                'success'
            )

        </script>
    @endif
    @if (session('aviso')==1)
        <script>
            Swal.fire(
                'Falha ao cadastrar Transações!',
                
                'error'
            )

        </script>

    @elseif (session('aviso')==2)
    <script>
        Swal.fire(
            'É permitido apenas arquivos no formato .xlsx! com os cabeçalhos descritos na documentação',
            
            'error'
        )

    </script>

    @endif
   

@endsection
