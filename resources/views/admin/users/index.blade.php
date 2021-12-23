@extends('layouts.admin')

@section('titulo', 'Lista de Utilizador')

@section('conteudo')
    <div class="card mt-3">
        <div class="card-body">
            <h3>Lista de Utilizadores</h3>
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
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>Nº TELEFONE</th>
                <th>TIPO DE UTILIZADOR</th>
                <th>ACÇÕES</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @if ($users)


                @foreach ($users as $user)
                    <tr class="text-center">
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->vc_nomeUtilizador }}</th>

                        <th>{{ $user->vc_email }}</th>
                        <td>{{ $user->vc_telefone }}</td>

                        <td class="utilizador">
                            
                                <select id="{{ $user->id }}" name="utilizador" class="form-control border-0" required>
                                    <option value="">{{ $user->vc_tipoUtilizador }}</option>
                                </select>
                           
                        </td>

                        @csrf
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="{{ route('admin.users.editar', $user->id) }}"
                                        class="dropdown-item">Editar</a>
                                    <a href="{{ route('admin.users.excluir', $user->id) }}" class="dropdown-item"
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

    @include('admin.layouts.footer')
    <script src="/js/datatables/jquery-3.5.1.js"></script>
    <script>
       

            $('.utilizador').click(function(e) {
          console.log($( "th.utilizador > select" ))
                var id = e.target.id;
                if ($('#' + id + ' option').length == '1') {
                    $('#' + id)
                        .append('<option value="Administrador">Administrador</option>')
                        .append('<option value="Supervisor">Supervisor</option>')
                        .append(
                            '<option value="Suplente">Suplente</option>')
                        
                }

                $('#' + id).change(function() {
                    console.log('ola');
                    var nivel = $('#' + id).val();
                 

                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: 'editar/nivel/' + id + '/' + nivel,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        
                        async: false,
                        success: function(response) {

                            // response.forEach(element => {
                            //     console.log
                            // });
                            console.log(response)

                            

                            Swal.fire(
                                   'Dados Actualizados com sucesso',
                                    '',
                                   'success'
                                  ).then(()=>{
                                    location.reload(true);
                                  });
                            // console.log(response.length)
                            
                               }
                             

                        // complete: function (data) {
                        //           printWithAjax(); 
                        //            }
                    })
                });

            });
        


        // $(function(){
        //     var el = document.getElementsByClassName('utilizador');
        //     el.addEventListener('click', function(e) {
        //     alert(e.target.id);
        //     });
        //         // $('#utilizador').append('<option value="' + 1 + '">' + 'Option ' + 1 + '</option>');

        // });

        // <option value="Director Geral">Director Geral</option>
        // <option value="Administrador">Administrador</option>
        // <option value="Sub Directoria Pedagógica">Sub Directoria Pedagógica</option>
        // <option value="RH">Recursos Humanos</option>
        // <option value="Secretaria">Secretaria</option>
        // <option value="Comissão">Comissão</option>
        // <option value="Professor">Professor</option>
        // <option value="Preparador">Preparador</option>
        // <option value="Chefe de Departamento Pedagógico">Chefe de Departamento Pedagógico</option>
        // <option value="Gabinete Pedagógico">Gabinete Pedagógico</option>
    </script>

@endsection
