<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Listas de turma</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
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
    <div class="text-center">
        <h5 class="text-success">Curso: <?php echo $turma->vc_cursoTurma; ?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $turma->vc_classeTurma; ?>ªClasse &nbsp;&nbsp;&nbsp;&nbsp; Turma: <?php echo $turma->vc_nomedaTurma."-".$turma->vc_turnoTurma; ?> &nbsp;&nbsp;&nbsp;&nbsp; Ano Lectivo: <?php echo $turma->vc_anoLectivo; ?></h5>
    </div>
    <table class="table table-striped  table-bodered table-hover">
        <thead>
            <tr>
                <th width="1px">Nº</th>
                <th width="50px">PROCESSO</th>
                <th>NOME</th>
                <th width="50px">SEXO</th>
                <th>DATA NASC.</th>
                <th>IDADE</th>
                <th>TELEFONE</th>
            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($alunos as $aluno) : ?>

                <tr>
                    <td><?php echo $contador++; ?></td>
                    <td><?php echo $aluno->id ?></td>
                    <td class="text-left"><?php echo $aluno->vc_primeiroNome . " " . $aluno->vc_nomedoMeio . " " . $aluno->vc_ultimoaNome; ?></td>
                    <td><?php echo $aluno->vc_genero ?></td>
                    <td><?php echo date('d-m-Y', strtotime($aluno->dt_dataNascimento)) ?></td>
                    <td><?php echo date('Y') - date('Y', strtotime($aluno->dt_dataNascimento)) ?></td>
                    <td><?php echo $aluno->it_telefone ?></td>
                </tr>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>




</body>

</html>