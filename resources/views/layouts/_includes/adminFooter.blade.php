<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<div id="sidebar-overlay"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
{{-- <!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
{{-- <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/js/select2.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/jquery.sparkline.min.js"></script>
<script src="/js/jquery.steps.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/jquery.timepicker.js"></script>

<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script> --}}

<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
{{-- Datatables --}}
<script src="/js/datatables/jquery.dataTables.min.js"></script>
<script src="/js/datatables/dataTables.bootstrap4.min.js"></script>
<!-- sweetalert -->
<script src="/js/sweetalert2.all.min.js"></script>


<script>
    $(".so_nota").hide();
    $(".nota_idade").hide();
    $(".so_idade").hide();
    $(".intervalo_de_idade").hide();
    $(".intervalo_de_idade_nota").hide();

    $('#tipo_filtro').change(function() {
        if ($('#tipo_filtro').val() == "1") {
            $(".so_nota").show();
        } else {
            $(".so_nota").hide();
        }

        if ($('#tipo_filtro').val() == "2") {
            $(".so_idade").show();
        } else {
            $(".so_idade").hide();
        }

        if ($('#tipo_filtro').val() == "3") {
            $(".nota_idade").show();
        } else {
            $(".nota_idade").hide();
        }
        if ($('#tipo_filtro').val() == "4") {
            $(".intervalo_de_idade").show();
        } else {
            $(".intervalo_de_idade").hide();
        }
        if ($('#tipo_filtro').val() == "5") {
            $(".intervalo_de_idade_nota").show();
        } else {
            $(".intervalo_de_idade_nota").hide();
        }
    });
</script>



<style>
    /* style a mexer */
    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 35px;
        user-select: none;
        -webkit-user-select: none;
    }

</style>

<script>
    $('.select2').select2({
        theme: 'bootstrap4',
    });

    $('.select2-multi').select2({
        multiple: true,
        theme: 'bootstrap4',
    });

    $('.drgpicker').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        }
    });
    $('.time-input').timepicker({
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
        $('.datetimes').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                'month')]
        }
    }, cb);

    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
        placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
        reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        },
        placeholder: "___.___.___.___"
    });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
        var toolbarOptions = [
            [{
                'font': []
            }],
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{
                    'header': 1
                },
                {
                    'header': 2
                }
            ],
            [{
                    'list': 'ordered'
                },
                {
                    'list': 'bullet'
                }
            ],
            [{
                    'script': 'sub'
                },
                {
                    'script': 'super'
                }
            ],
            [{
                    'indent': '-1'
                },
                {
                    'indent': '+1'
                }
            ], // outdent/indent
            [{
                'direction': 'rtl'
            }], // text direction
            [{
                    'color': []
                },
                {
                    'background': []
                }
            ], // dropdown with defaults from theme
            [{
                'align': []
            }],
            ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor, {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    console.log("Entrada")
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [
                [0, 'desc']
            ]
        });
    });
</script>

@if (session('permissao'))
    <script>
        Swal.fire(
            'Você não tem permissão para acessar essa aba',
            '',
            'error'
        )
    </script>
@endif
<script>
    function verificaMostraBotao() {
        $('input[type=file]').each(function(index) {
            if ($('input[type=file]').eq(index).val() != "") {
                Swal.fire(
                    'A imagen foi carregada',
                    '',
                    'info'
                )
            }
        });
    }

    $('input[type=file]').on("change", function() {
        verificaMostraBotao();
    });
</script>

<script>
    $("#img-input").click(function() {
        $("#image_visible").hide();
    });
</script>

<script>
    function readImage() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function(e) {
                document.getElementById("preview").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    }

    document.getElementById("img-input").addEventListener("change", readImage, false);
</script>
<script>
    function showImage(imagePath, item) {

        let nome = imagePath
        let image = document.getElementById("imageoption").src = "/confirmados/" + nome
        let file = document.getElementById("file")
        document.getElementById("vc_nameImage").value = nome
        document.getElementById("nome").innerHTML = "Nome: " + item.vc_primeiroNome + " " + item.vc_nomedoMeio + " " +
            item.vc_ultimoaNome


    }
</script>


<script type="text/javascript">
    $('.buscarEscola').select2({
        placeholder: 'Selecionar Escola',
        ajax: {
            url: '/buscar/escolas',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_escola,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });




    $('.buscarTurmaMatricula').select2({
        placeholder: 'Selecionar a Turma',
        ajax: {
            url: '/buscar/turmas-matricula',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_nomedaTurma + "| " + item.vc_turnoTurma + "| " + item
                                .vc_cursoTurma + "| " + item.vc_classeTurma + " ª Classe" + "| Ano Lectivo "+ item.vc_anoLectivo,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });


    $('.buscarTurmaAtrib').select2({
        placeholder: 'Selecionar a Turma',
        ajax: {
            url: '/buscar/turmas-atrib',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_nomedaTurma + "| " + item.vc_turnoTurma + "| " + item
                                .vc_cursoTurma + "| " + item.vc_classeTurma + " ª Classe",
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    function getTurma() {
        $('#selectT').change(function() {
            var data = $('#valueTurma').val();
            console.log(data)
        })



    }
    getTurma();
    $('.buscarDisciplinaAttrib').select2({
        placeholder: 'Selecionar a Disciplina',
        ajax: {
            url: '/buscar/disciplinas/attrib',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_nome,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.buscarProcesso').select2({
        placeholder: 'Selecionar o Numero de Processo',

        ajax: {
            url: '/buscar/processos',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        showImage(item.foto, item)
                        return {
                            text: item.id,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });



    $('.buscarClasse').select2({
        placeholder: 'Selecionar a classe',
        ajax: {
            url: '/buscar/classes',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_classe,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });


    $('.buscarTurma').select2({
        placeholder: 'Selecionar a Turma',
        ajax: {
            url: '/buscar/turmas',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_nomeDaTurma,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
    $('.buscarCurso').select2({
        placeholder: 'Selecionar o curso',
        ajax: {
            url: '/buscar/cursos',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_nomeCurso,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.buscarDisciplina').select2({
        placeholder: 'Selecionar a Disciplina',
        ajax: {
            url: '/buscar/disciplinas',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_nome,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });



    $('.buscarAnoLetivo').select2({
        placeholder: 'Selecionar o ano lectivo',
        ajax: {
            url: '/buscar/anoletivo',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.ya_inicio + '-' + item.ya_fim,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });



    $('.buscarDiasSemana').select2({
        placeholder: 'Selecionar o dia da semana',
        ajax: {
            url: '/buscar/diasSemana',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                console.log('aqui', data)

                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.vc_dia,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
<script>
    $("a[id^='tag']").on("click", function() {
        var id = $(this).attr('codigo');
        let id_int = parseInt(id);
        $.ajax({
            type: 'GET',
            url: `/admin/candidatos/${id_int}/admitir`,
            success: function(data) {
                if (data.state == 0) {
                    $("#no" + data.id).html('Selecionado').addClass('text-green');
                    $(".p" + data.id).remove();
                }
            }
        });
    });
</script>



<script>
    $("a[id^='tag']").on("click", function() {
        var id = $(this).attr('codigo');
        let id_int = parseInt(id);
        $.ajax({
            type: 'GET',
            url: `/admin/pre_candidatos/${id_int}/admitir`,
            success: function(data) {
                if (data.state == 0) {
                    $("#nt" + data.id).html('Selecionado').addClass('text-green');
                    $(".p" + data.id).remove();
                }
            }
        });
    });
</script>

<script>
    $("a[id^='tag']").on("click", function() {
        var id = $(this).attr('codigoD');
        let id_int = parseInt(id);
        $.ajax({
            type: 'GET',
            url: `/admin/selecionados/${id_int}/transferir`,
            success: function(data) {

                    $("#nt" + id).html('Transferido').addClass('text-green');
                    $(".pre" + id).remove();
                    console.log(data)

            }
        });
    });
</script>
</body>

</html>
