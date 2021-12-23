<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Listas de candidaturas</title>
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
        <h3 class="tema">Lista de Candidaturas de <?php if ($curso) :  echo ($curso);
                                                    else : echo "Todos os Cursos";
                                                    endif; ?></h3>
    </div>
    <div class="text-left">
        <h5 class="text-dark">
            Ano Lectivo: <?php if ($anolectivo) :  echo ($anolectivo);
                            else : echo "Todos os anos lectivos";
                            endif; ?>
        </h5>
    </div>
    <table class="table table-striped  table-bodered table-hover">
        <thead>
            <tr>
                <th width="3px">Nº</th>
                <th width="90px">Nº de Inscrição</th>
                <th>NOME</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($alunos as $aluno) : ?>

                <tr>
                    <td><?php echo $contador++; ?></td>
                    <td><?php echo $aluno->id ?></td>
                    <td class="text-left"><?php echo $aluno->vc_primeiroNome . " " . $aluno->vc_nomedoMeio . " " . $aluno->vc_apelido; ?></td>

                    <td><?php echo date('Y') - date('Y', strtotime($aluno->dt_dataNascimento)) ?> anos</td>
                </tr>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>

    <br><br><br><br><br>
    <p class="text-center">
        O Responsável
        <br>
        __________________________________________________________<br>
        <?php echo $cabecalho->vc_nomeSubdirectorPedagogico; ?>
    </p>

</body>

</html>