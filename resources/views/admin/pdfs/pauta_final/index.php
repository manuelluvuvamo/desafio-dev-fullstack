<?php
/* Ideializado por Paulo Alexandre Fernandes dos Santos
    email: tecnicopaulo@outlook.pt
    LinkedIn: Chandinho
*/
/* Incluindo a conexão com a BD */

use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Pauta da Turma nome da turma </title>
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
    <div class="text-center">
        <h5 class="text-dark">Curso: <?php echo $turma->vc_cursoTurma; ?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $turma->vc_classeTurma; ?>ªClasse &nbsp;&nbsp;&nbsp;&nbsp;
            <?php
            
                echo "Pauta Final";
            
            /*  else {
                echo "Pauta do Exame Especial";
            } */

            ?> &nbsp;&nbsp;&nbsp;&nbsp; Ano Lectivo: <?php echo $turma->vc_anoLectivo; ?></h5>
    </div>
    <h3 class="tema Maiusculas">Mapa de avaliação Anual da Turma <?php echo $turma->vc_nomedaTurma; ?> - <?php echo $turma->vc_classeTurma; ?>ª classe</h3>

    <div class="text-right">
        <h5 class="director">VISTO DO SUB-DIRECTOR PEDAGÓGICO</h5>
        <!-- linha por baixo do director de tamanho em questão, simplesmente! -->
        <?php for ($i = 0; $i < 40; $i++) {
            echo "_";
        } ?>
    </div>
    <br><br>
    <table class="table table-striped  table-bodered table-hover">
        <thead>
            <tr>
                <th style="width:10px;">Nº</th>
                <th style="width:10px;">PROCESSO</th>
                <th style="width:300px;">NOME</th>
                <th style="width:9px;">S<br>E<br>X<br>O<br></th>
                <!-- chamando os nomes das disciplinas da turma em questão para o cabeçalho -->
                


            </tr>


        </thead>
        <tbody>
       
        </tbody>
    </table>

    <div class="text-center">
        <p class="director">DIRECTOR GERAL</p>
        <!-- linha por baixo do director de tamanho em questão, simplesmente! -->
        <?php for ($i = 0; $i < 40; $i++) {
            echo "_";
        } ?>


    </div>


</body>

</html>