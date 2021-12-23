@extends('layouts.admin')
@section('titulo', 'Relatório de Candidatura')

@section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Relatório Estatístico de Alunos</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ url('Admin/recebe_alunos') }}"  method="POST" target="_blank">
                @csrf

                <div class="row">
                <div class="form-group col-md-4">
                    <label for="vc_anolectivo" class="form-label">Ano Lectivo:</label>
                    <select name="vc_anolectivo" id="vc_anolectivo" class="form-control" required>
                        <option value="Todos">Todos</option>
                        @foreach ($anoslectivos as $anolectivo)
                            <option value="{{ $anolectivo->ya_inicio . '-' . $anolectivo->ya_fim }}">
                                {{ $anolectivo->ya_inicio . '-' . $anolectivo->ya_fim }}
                            </option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group col-sm-4">
                    <label for="data_inicio">Data Incial:</label>
                    <input type="date" name="data_inicio" class="form-control border-secondary" max="{{ date('Y-m-d') }}">
                </div>


                <div class="form-group col-sm-4">
                    <label for="data_inicio">Data Final:</label>
                    <input type="date" name="data_final" class="form-control border-secondary" max="{{ date('Y-m-d') }}">
                </div>


               
            </div>
                <div class="form-group  d-flex justify-content-center">
                   
                    <button class="form-control btn btn-dark w-25" >Pesquisar</button>
                </div>

            </form>
        </div>
    </div>


@endsection
