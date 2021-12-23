@extends('layouts.admin')

@section('titulo', 'Lista de Transações')

@section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Lista de Transações</h3>
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
    <table id="example" class="display table table-hover table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>TIPO</th>
                <th>DATA</th>
                <th>VALOR</th>
                <th>BI</th>
                <th>CARTÃO</th>
                <th>HORA</th>
                <th>DONO DA LOJA</th>
                <th>NOME DA LOJA</th>
                <th>ACÇÕES</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @if ($transacoes)


                @foreach ($transacoes as $transacao)
                    <tr class="text-center">
                        <th>{{ $transacao->id }}</th>
                        <th>{{ $transacao->tipo }}</th>

                        <th>{{ $transacao->data }}</th>
                        <td>{{ $transacao->valor }}</td>

                        <td>{{ $transacao->bi }}</td>
                        <td>{{ $transacao->cartao }}</td>
                        <td>{{ $transacao->hora }}</td>
                        <td>{{ $transacao->dono_loja }}</td>
                        <td>{{ $transacao->nome_loja }}</td>




                        @csrf
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="{{ route('admin.transacoes.editar', $transacao->id) }}"
                                        class="dropdown-item">Editar</a>
                                    <a href="{{ route('admin.transacoes.excluir', $transacao->id) }}" class="dropdown-item"
                                        data-confirm="Tem certeza que deseja eliminar?">Eliminar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


            @endif
        </tbody>
    </table>
    <script src="/js/datatables/jquery-3.5.1.js"></script>

    <script>
        $(document).ready(function() {

            //start delete
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#confirm-delete').length) {
                    $('table').append(
                        '<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">Eliminar os dados</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza que pretende elimnar?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> <a  class="btn btn-info" id="dataConfirmOk">Eliminar</a> </div></div></div></div>'
                    );
                }
                $('#dataConfirmOk').attr('href', href);
                $('#confirm-delete').modal({
                    shown: true
                });
                return false;

            });
            //end delete
        });
    </script>
    <!-- Footer-->

    
    <script src="/js/datatables/jquery-3.5.1.js"></script>
    

@endsection
