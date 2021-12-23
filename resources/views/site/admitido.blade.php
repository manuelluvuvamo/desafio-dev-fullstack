@extends('layouts.site')
@section('conteudo')






    <div class="main">

        <div class="container mt-5 p-5">
            <div class="mb-5">
                <h3 class="text-center">ATUALIZAÇÃO DOS DADOS</h3>
            </div>
            <div class="mt-5 col-md-12">


                <form method="post" action="{{ route('admin.admitidoPost') }}" enctype="multipart/form-data"
                    class="col-md-12">
                    @csrf
                    @include('forms._formadmitido.index')

                    <div class="col-md-12 ">
                        <div class="row">
                            <button class="btn btn-success p-4 mx-auto col-md-2" type="submit">Atualizar</button>

                        </div>

                    </div>
                </form>

            </div>


        </div>
    </div>

    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('aluno'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Dados actualizados',
        })
    </script>
@endif

@if (session('aviso'))
<script>
    Swal.fire(
        'Erro ao actualizar os dados!',
        '',
        'error'
    )

</script>
@endif
@endsection
