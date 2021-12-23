<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <title>Boletim de Estudante</title>

    <style>
        <?php echo $bootstrap;
        echo $css; ?>
    </style>
</head>

<body>
    <div class="text-center">

        <img src="images/ensignia/<?php echo $cabecalho->vc_ensignia; ?>.png" class="" width="50" height="50">
        <br>
        <?php echo $cabecalho->vc_republica; ?>
        <br>
        <?php echo $cabecalho->vc_ministerio; ?>
        <br>
        <img src="images/logotipo/<?php echo $cabecalho->vc_logo; ?>.png" class="logotipo" width="100" height="100">
        <?php echo $cabecalho->vc_escola; ?>

    </div>

    <div id="boletim" class="text-center">Boletim do Estudante nº <?php echo $dadosaluno->id; ?></div>
    <div>
        <h3 class="d">Dados pessoais</h3>
        <p class="corpo">

            <b>Nome Completo:</b> <?php echo $dadosaluno->vc_primeiroNome . " " . $dadosaluno->vc_nomedoMeio . " " . $dadosaluno->vc_ultimoaNome; ?><br>
            <b>Data de Nascimento:</b> <?php echo date('d-m-Y', strtotime($dadosaluno->dt_dataNascimento)) ?><br>
            <b>Idade:</b> <?php echo date('Y') - date('Y', strtotime($dadosaluno->dt_dataNascimento)) ?> anos<br>
            <?php if ($dadosaluno->vc_nomePai) : ?>
                <b>Nome do pai:</b> <?php echo $dadosaluno->vc_nomePai; ?><br>
            <?php endif; ?>
            <?php if ($dadosaluno->vc_nomeMae) : ?>
                <b>Nome da mãe:</b> <?php echo $dadosaluno->vc_nomeMae; ?><br>
            <?php endif; ?>
            <b>Gênero:</b> <?php echo $dadosaluno->vc_genero; ?><br>
            <b>Portador de Deficiência Fisica?:</b> <?php echo $dadosaluno->vc_dificiencia; ?><br>
            <b>Estado Civil:</b> <?php echo $dadosaluno->vc_estadoCivil; ?><br>
            <b>Telefone:</b> <?php echo $dadosaluno->it_telefone; ?><br>
            <?php if ($dadosaluno->vc_email) : ?>
            <b>Email:</b> <?php echo $dadosaluno->vc_email; ?><br>
            <?php endif; ?>
            <b>Residencia:</b> <?php echo $dadosaluno->vc_residencia; ?><br>
            <b>Naturalidade:</b> <?php echo $dadosaluno->vc_naturalidade; ?><br>
            <b>Provincia:</b> <?php echo $dadosaluno->vc_provincia; ?><br>
            <b>Bilhete de Identidade Nº:</b> <?php echo $dadosaluno->vc_bi; ?><br>
            <b>Data de emissão do bilhete de Identidade:</b> <?php echo date('d-m-Y', strtotime($dadosaluno->dt_emissao)) ?><br>
            <b>Local de emissão do Bilhete de Identidade:</b> <?php echo $dadosaluno->vc_localEmissao; ?><br>
        </p>
    </div>
    <div>
        <h3 class="d">Dados Acadêmicos</h3>
        <p class="corpo">
            <b>Escola Anterior:</b> <?php echo $dadosaluno->vc_EscolaAnterior; ?><br>
            <b>Ano de Conclusão:</b> <?php echo $dadosaluno->ya_anoConclusao; ?><br>
        </p>
    </div>


    <div>
        <h3 class="d">Dados da Escola Actual: <?php echo $cabecalho->vc_escola; ?></h3>
        <p class="corpo">
            <table class="table table-striped  table-bodered table-hover">
                <thead>
                    <tr>
                        <th>TURMA</th>
                        <th>CURSO</th>
                        <th>CLASSE</th>
                        <th>ANO LECTIVO</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($academicos as $academico) : ?>

                        <tr>
                        
                            <td><?php echo $academico->vc_nomedaTurma; ?></td>
                            <td><?php echo $academico->vc_nomeCurso ?></td>
                            <td><?php echo $academico->vc_classe ?>ªclasse</td>
                            <td><?php echo $academico->vc_anoLectivo ?></td>
                        </tr>

                    <?php endforeach; ?>

                    <br>
                </tbody>
            </table>



        </p>
    </div>


    <br>

</body>

</html>