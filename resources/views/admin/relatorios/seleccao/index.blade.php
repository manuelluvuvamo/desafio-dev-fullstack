@extends('layouts.admin')
@section('titulo', 'Relatório Selecção')

 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Relatório Estatístico de Selecção</h3>
        </div>
    </div>


 


    <div class="card">
        <div class="card-body">
            <form action="{{url('Admin/recebeRes')}}" class="row" method="POST" target="_blank">
                @csrf
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
               
                <div class="form-group col-md-5">
                    <label for="vc_curso" class="form-label">Curso:</label>
                    <select name="vc_curso" id="vc_curso" class="form-control">
                        <option value="Todos">Todos</option>
                        @foreach ($cursos as $curso)
                            <option value="{{ $curso->vc_nomeCurso }}">
                                {{ $curso->vc_nomeCurso }}
                            </option>
                        @endforeach
                    </select>

                </div>
                
                <div class="form-group col-sm-4">
                    <label for="data_inicio">Data:</label>
                    <input type="date" name="data" class="form-control border-secondary" max="{{ date('Y-m-d') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="form-label text-white">.</label>
                    <button class="form-control btn btn-dark">Pesquisar</button>
                </div>

            </form>
        </div>
    </div>





@endsection


