<?php
/* Ideializado por Paulo Alexandre Fernandes dos Santos
email: tecnicopaulo@outlook.pt
LinkedIn: Chandinho
*/
/* Incluindo a conexão com os models */

use App\Models\Turma;
use App\Models\Candidatura;
use App\Models\Matricula;
use App\Models\Alunno;
?>
<script src="/graficos/chart.min.js"></script>
<script src="/graficos/util.js"></script>
{{-- <script src="/graficos/moment.js"></script> --}}

@isset($Anosgraficos)
    {{-- crescimento das turmas --}}

    <script type="text/javascript">
        var anos = [
            @foreach ($Anosgraficos as $item)
                [ "{{ $item->ya_inicio }}-{{ $item->ya_fim }}" ],
            @endforeach
        ];

        var turmas = [
            @foreach ($Anosgraficos as $value)
                @php
                    $d = Turma::where([['it_estado_turma', 1], ['vc_anoLectivo', "$value->ya_inicio-$value->ya_fim"]])->count();
                    echo $d;
                @endphp,
            @endforeach

        ];

        var chart = new Chart(primeiroGrafico, {
            type: 'bar',
            data: {
                labels: anos,
                datasets: [{
                    label: 'Crescimento de Turmas em função do Ano Lectivo',
                    data: turmas,
                    backgroundColor: "#03213e",
                    borderColor: "rgba(54, 162, 235, 0.2)",
                    borderWidth: 1
                }]
            },

            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>

    {{-- /crescimento das turmas --}}

    {{-- Crescimento das Candidaturas --}}
    <script type="text/javascript">
        var anosCandidaturas = [
            @foreach ($Anosgraficos as $item)
                [ "{{ $item->ya_inicio }}-{{ $item->ya_fim }}" ],
            @endforeach
        ];

        var candidaturas = [
            @foreach ($Anosgraficos as $value)
                @php
                    $d = Candidatura::where([['it_estado_candidato', 1], ['vc_anoLectivo', "$value->ya_inicio-$value->ya_fim"]])->count();
                    echo $d;
                @endphp,
            @endforeach

        ];

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: anosCandidaturas,

                datasets: [{
                    label: 'Crescimento de Candidaturas em função do Ano Lectivo',
                    data: candidaturas,
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "#03213e",
                    borderWidth: 1
                }]
            },

            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>
    {{-- ./Crescimento das Candidaturas --}}

    {{-- Estatística dos Matriculados e selecionado --}}
    <script type="text/javascript">
        var anosmixed = [
            @foreach ($Anosgraficos as $item)
                [ "{{ $item->ya_inicio }}-{{ $item->ya_fim }}" ],
            @endforeach
        ];

        var matriculados = [
            @foreach ($Anosgraficos as $value)
                @php
                    $d = Matricula::where([['it_estado_matricula', 1], ['vc_anoLectivo', "$value->ya_inicio-$value->ya_fim"]])->count();
                    echo $d;
                @endphp,
            @endforeach

        ];

        var selecionados = [
            @foreach ($Anosgraficos as $value)
                @php
                    $d = Alunno::where([['it_estado_aluno', 1], ['vc_anoLectivo', "$value->ya_inicio-$value->ya_fim"]])->count();
                    echo $d;
                @endphp,
            @endforeach

        ];



        var config = {
            type: 'line',
            data: {
                labels: anosmixed,
                datasets: [{
                    label: 'Matriculados',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    fill: false,
                    data: matriculados,
                }, {
                    label: 'Selecionados',
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    fill: false,
                    data: selecionados,
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Estatística dos Matriculados e Selecionados em função dos Anos Lectivos'
                },
                scales: {
                    xAxes: [{
                        display: true,
                    }],

                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);
        };

    </script>
    {{-- ./Estatística dos Matriculados e selecionado --}}

    {{-- Estatística das Candidaturas por curso em ano actual --}}
    <script>
        var cursosanoactual = [
            @foreach ($Cursosgraficos as $curso)
                [ "{{ $curso->vc_nomeCurso }}" ],
            @endforeach
        ];

        var cursodadosanoactual = [
            @foreach ($Cursosgraficos as $raw)
                @php
                    $s = Candidatura::where([['it_estado_candidato', 1], ['vc_anoLectivo', $AnoLectivo], ['vc_nomeCurso', $raw->vc_nomeCurso]])
                        ->orderBy('vc_nomeCurso', 'asc')
                        ->count();
                    echo $s;
                @endphp,
            @endforeach

        ];


        // gera uma cor aleatória em hexadecimal
        function gera_cor() {
            var hexadecimais = 'ABCDEF0123456789';
            var cor = '#';

            // Pega um número aleatório no array acima
            for (var i = 0; i < 6; i++) {
                //E concatena à variável cor
                cor += hexadecimais[Math.floor(Math.random() * 16)];
            }
            return cor;
        }

        var cursodocurso = [
            @foreach ($Cursosgraficos as $raw)
                gera_cor(),
            @endforeach

        ];


        var ctx3 = document.getElementById('chart-area');
        window.myPie = new Chart(ctx3, {
            type: 'pie',
            data: {
                datasets: [{
                    data: cursodadosanoactual,
                    backgroundColor: cursodocurso,

                }],
                labels: cursosanoactual
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: "Estatística das Candidaturas por Curso em função do Ano Lectivo: {{ $AnoLectivo }}"
                },
            }
        });

    </script>
    {{-- ./Estatística das Candidaturas por curso em ano actual --}}

@endisset
