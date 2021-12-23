@extends('layouts.admin')
@section('titulo', 'Pesquisar Logs ')

 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Pesquisar Logs</h3>
        </div>
    </div>
    <script src="/js/sweetalert2.all.min.js"></script>
    @if (session('teste'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Logs Inexistente',
        })
    </script>
@endif
 
    @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 alert-danger">
            @foreach ($errors->all() as $erro)
                <h5>{{ $erro }}</h5>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/logs/recebelogs')}}" class="row" method="POST">
                @csrf
                <div class="form-group col-md-4">
                    <label for="vc_anolectivo" class="form-label">Ano Lectivo</label>
                    <select name="vc_anolectivo" id="vc_anolectivo" class="form-control">
                        <option value="Todos">Todos</option>
                        @foreach ($anos as $ano)
                            <option value="{{$ano->ano}}">
                                {{  $ano->ano }}
                            </option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group col-md-5">
                    <label for="vc_nome" class="form-label">Utilizador</label>
                    <select name="vc_nome" id="vc_nome" class="form-control">
                        <option value="Todos">Todos</option>
                        @foreach ($utilizadores as $utilizador)
                            <option value="{{ $utilizador->vc_email}}">
                                {{ $utilizador->vc_email }}
                            </option>
                        @endforeach
                    </select>

                </div>
             
                <div class="form-group col-md-3">
                    <label for="" class="form-label text-white">.</label>
                    <button class="form-control btn btn-dark">Pesquisar</button>
                </div>

            </form>
        </div>
    </div>

@include('admin.layouts.footer')



@endsection



