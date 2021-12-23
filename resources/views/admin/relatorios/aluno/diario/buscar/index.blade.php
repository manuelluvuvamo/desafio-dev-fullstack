@extends('layouts.admin')
@section('titulo', 'Relatório de Candidatura')

@section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Relatório Diário de Candidatura</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ url('Admin/recebeRec') }}" class="row" method="POST" target="_blank">
                @csrf

                <div class="form-group col-sm-4">
                    <label for="data_inicio">Data Incial:</label>
                    <input type="date" name="data_inicio" class="form-control border-secondary" max="{{ date('Y-m-d') }}">
                </div>


                <div class="form-group col-sm-4">
                    <label for="data_inicio">Data Final:</label>
                    <input type="date" name="data_final" class="form-control border-secondary" max="{{ date('Y-m-d') }}">
                </div>



                <div class="form-group col-md-3">
                    <label for="" class="form-label text-white">.</label>
                    <button class="form-control btn btn-dark">Pesquisar</button>
                </div>

            </form>
        </div>
    </div>


@endsection
