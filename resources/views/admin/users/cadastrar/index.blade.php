@extends('layouts.admin')

@section('titulo', 'Cadastrar Utilizador')

 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h2>Cadastrar Utilizador</h2>
        </div>
    </div>
    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('teste'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Funcionário Inexistente',
        })
    </script>
@endif


    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/users/salvar')}}" method="post" class="row">
                @csrf

                @include('forms._formUser.index')

                <div class=" col-md-12 text-center d-flex justify-content-center ">
                    <button type="submit" class=" col-md-2 text-center btn btn-dark"> Cadastrar</button>
                </div>
                {{-- <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
    <!-- sweetalert -->
    <script src="/js/sweetalert2.all.min.js"></script>

    @if (session('status'))
        <script>
            Swal.fire(
                'Utilizador Cadastrado',
                '',
                'success'
            )

        </script>
    @endif
    @if (session('aviso'))
        <script>
            Swal.fire(
                'Falha ao cadastrar Utilizador!',
                'Email existente ou senhas diferentes ',
                'error'
            )

        </script>
    @endif
    <!-- Footer-->
    @include('admin.layouts.footer')

@endsection
