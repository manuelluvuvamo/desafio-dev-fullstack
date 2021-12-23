<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de matrícula</title>
    <style>
        <?php echo $bootstrap;
        echo $style; ?>
    </style>
</head>

<body>
    <div class="text-center">
        <p>
            <img src="images/ensignia/<?php echo $cabecalho->vc_ensignia; ?>.png" class="" width="50" height="50">
            <br>
            <?php echo $cabecalho->vc_republica; ?>
            <br>
            <?php echo $cabecalho->vc_ministerio; ?>
            <br>
            <img src="images/logotipo/<?php echo $cabecalho->vc_logo; ?>.png" class="logotipo" width="100" height="100">
            <?php echo $cabecalho->vc_escola; ?>
        </p>

    </div>
    <br>
   
    <h4 class="text-center"><?php echo $titulo; ?>  <?php  echo isset($data)?' no ano lectivo de '.$data:'alunos'; ?>  <?php echo isset($vc_curso)?'no curso de '.$vc_curso:'de todos cursos '?><?php echo isset($vc_classe) && $vc_classe != 'Todos' ?' da '.$vc_classe.' ª classe':' e de todas as classes'?> em  <?php echo $dia ?>   </h4>
    <br>

    <table class="table tabelaStyle text-center">
        <thead>
            <tr>
                <th>CURSOS</th>
                <th width="120">PORTADOR DE DEFICIêNCIA</th>
                <th>FEMENINO</th>
                <th>MASCULINO</th>
                <th>Per TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php

            use Illuminate\Support\Facades\DB;

            $mpc = DB::table('matriculas')
                ->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')
                ->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id');
          
            if ($data == "Todos") {
                $cursos = $mpc->groupby('cursos.vc_nomeCurso')->get('cursos.vc_nomeCurso');
            } else {
                $cursos = $mpc->where([['matriculas.vc_anoLectivo', $data]])->groupby('cursos.vc_nomeCurso')->get('cursos.vc_nomeCurso');
   
            }
            if(isset($id_curso) && $id_curso!= "Todos") {
                $cursos = $mpc->where('matriculas.it_idCurso', $id_curso)->groupby('cursos.vc_nomeCurso')->get('cursos.vc_nomeCurso');
            }

            foreach ($cursos as $curso) : ?>

                <tr>
                    <td class="text-left"><?php echo $curso->vc_nomeCurso; ?></td>
                    <?php

                    if ($data == "Todos") {
                        $DporC = DB::table('matriculas')->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id')->where([['cursos.vc_nomeCurso', $curso->vc_nomeCurso], ['alunnos.vc_dificiencia', '=', "Sim"]])->whereDate('matriculas.created_at', $dia)->count();
                        $MporC = DB::table('matriculas')->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id')->where([['cursos.vc_nomeCurso', $curso->vc_nomeCurso], ['alunnos.vc_genero', '=', "Masculino"]])->whereDate('matriculas.created_at', $dia)->count();
                        $FporC = DB::table('matriculas')->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id')->where([['cursos.vc_nomeCurso', $curso->vc_nomeCurso], ['alunnos.vc_genero', '=', "Feminino"]])->whereDate('matriculas.created_at', $dia)->count();
                    } else {
                        $DporC = DB::table('matriculas')->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id')->where([['matriculas.vc_anoLectivo', $data], ['cursos.vc_nomeCurso', $curso->vc_nomeCurso], ['alunnos.vc_dificiencia', '=', "Sim"]])->whereDate('matriculas.created_at', $dia)->count();
                        $MporC = DB::table('matriculas')->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id')->where([['matriculas.vc_anoLectivo', $data], ['cursos.vc_nomeCurso', $curso->vc_nomeCurso], ['alunnos.vc_genero', '=', "Masculino"]])->whereDate('matriculas.created_at', $dia)->count();
                        $FporC = DB::table('matriculas')->join('cursos', 'matriculas.it_idCurso', '=', 'cursos.id')->join('alunnos', 'matriculas.it_idAluno', '=', 'alunnos.id')->where([['matriculas.vc_anoLectivo', $data], ['cursos.vc_nomeCurso', $curso->vc_nomeCurso], ['alunnos.vc_genero', '=', "Feminino"]])->whereDate('matriculas.created_at', $dia)->count();
                    }
                    ?>
                    <td><?php echo $DporC ?></td>
                    <td><?php echo $FporC ?></td>
                    <td><?php echo $MporC ?></td>
                    <td><?php echo $MporC + $FporC ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>TOTAL GERAL</th>
                <th><?php echo $totalD; ?></th>
                <th><?php echo $totalF; ?></th>
                <th><?php echo $totalM; ?></th>
                <th><?php echo $totalGeral ?></th>
            </tr>

        </tfoot>
    </table>

</body>

</html>