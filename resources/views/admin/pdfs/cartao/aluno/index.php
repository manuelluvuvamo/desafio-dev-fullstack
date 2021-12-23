<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Cartão de Estudante</title>
    <style>
        <?php echo $bootstrap;
        echo $css; ?>
    </style>
</head>

<body style="background-image: url('images/cartao/aluno.jpg');background-position: top left; background-repeat: no-repeat;
             background-image-resize: 2;
             background-image-resolution: from-image;">
    <?php foreach ($alunos as $aluno) : ?>
        <div class="position-relative">

            <section class="content">

                <img src="<?php echo $aluno->vc_imagem; ?>" class="foto">

                <div> <b></b></div>
                <div class="proc"> <b><?php echo $aluno->id ?></b></div>
                <div class="anolectivo"><?php echo $aluno->vc_anoLectivo; ?></div>
                <div class="nome">
                    <b>
                        <?php
                        $myvalue = $aluno->vc_primeiroNome;
                        $arr = explode(' ', trim($myvalue));

                        echo substr($arr[0] . " " . $aluno->vc_ultimoaNome, 0, 20);
                        ?>
                    </b>
                </div>
                <div class="turma"><b><?php echo $aluno->vc_nomedaTurma; ?></b></div>
                <div class="classe"><b><?php echo $aluno->vc_classe; ?></b></div>
                <div class="curso"><b><?php echo substr($aluno->vc_shortName, 0, 33); ?></b></div>

            </section>


        </div>
    <?php endforeach; ?>

</body>

</html>