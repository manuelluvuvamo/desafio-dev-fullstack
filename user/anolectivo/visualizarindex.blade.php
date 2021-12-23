@extends('layouts.admin')
@section('titulo', 'Ano Lectivo/Listar')
 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Visualizar Ano Lectivo <b>{{ $anolectivo->ya_inicio."-".$anolectivo->ya_fim }}</b></h3>
        </div>
    </div>

    <table id="example" class="display table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>INICIO</th>
                <th>FIM</th>
                <th>DATA DE REGISTRO</th>
                <th>DATA DE ACTUALIZAÇÃO</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td>{{ $anolectivo->id }}</td>
                <td>{{ $anolectivo->ya_inicio }}</td>
                <td>{{ $anolectivo->ya_fim }}</td>
                <td>{{ $anolectivo->created_at }}</td>
                <td>{{ $anolectivo->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <script src="/js/datatables/jquery-3.5.1.js"></script>
  
    @include('admin.layouts.footer')

@endsection

