<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Listas de Diplomados</title>
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
        <h3 class="tema">Lista de Diplomados</h3>
    </div>

    <table class="table table-striped  table-bodered table-hover">
        <thead>
            <tr>
                <th width="3px">Nº</th>
                <th >PROCESSO</th>
                <th>NOME</th>
                <th>BILHETE DE IDENTIDADE</th>

                <th>IDADE</th>
            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($diplomados as $row) : ?>

                <tr>
                    <td><?php echo $contador++; ?></td>
                    <td><?php echo $row->it_id_aluno ?></td>
                    <td class="text-left"><?php echo $row->vc_primeiroNome . " ".$row->vc_nomeMeio." " . $row->vc_ultimoNome ?></td>
                    <td><?php echo $row->vc_nBI ?></td>
                    <td><?php echo date('Y') - date('Y', strtotime($row->dt_dataNascimento)) ?> anos</td>
                </tr>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>


</body>

</html>
