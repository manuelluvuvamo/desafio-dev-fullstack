@extends('layouts.admin')

@section('titulo', 'Logs de Actividade')


 @section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Logs de Actividade </h3>
        </div>
    </div>

    <table id="example" class="display table table-hover table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>DATA</th>
                <th>UTILIZADOR</th>
                <th>ACTIVIDADE</th>
            </tr>
        </thead>
        <tbody class="bg-white">
      
        @foreach ($logs as $log)

<tr class="text-center">

    <td>{{ $log->id}}</td>
    <td>{{ $log->created_at}}</td>
    <td>{{ $log->vc_email }}</td>
    <td>{{ $log->vc_descricao}}</td>
   
</tr>
@endforeach
        </tbody>
    </table>
    @include('admin.layouts.footer')
@endsection
