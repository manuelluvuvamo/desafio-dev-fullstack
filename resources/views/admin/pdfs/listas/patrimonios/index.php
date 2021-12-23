<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Listas de Patrimônios</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
    </style>
</head>

<body>
    <div class="text-center">
        <div class="ensignia">
            <img src="images/ensignia/<?php echo $cabecalho->vc_ensignia; ?>.png" class="" width="40" height="40">
            <br>
            <?php echo $cabecalho->vc_republica; ?>
            <br>
            <?php echo $cabecalho->vc_ministerio; ?>
            <br>
            <img src="images/logotipo/<?php echo $cabecalho->vc_logo; ?>.png" class="logotipo" width="70" height="70">
          <div class="escola"> <?php echo $cabecalho->vc_escola; ?></div> 
        </div>

    </div>
    <br>
    <div class="text-left">
        <h6 class="tema">
         <div class="p"> Patrimônios da Instituição</div>
        </h6>
    </div>
    <table class="table table-striped  table-bodered table-hover">
        <thead>
            <tr>
            <th width="3px">Nº</th>
                <th width="90px" >Nº do Patrimônio</th>                  
                <th width="90px">NOME</th>
                <th width="80px">ESTADO</th>
                <th width="80px">QUANTIDADE</th>
                <th width="80px">VALOR</th>
                <th width="80px">Nº FACTURA</th>
                <th width="80px">VIDA ÚTIL</th>
                <th width="80px">UTILIDADE</th>
                <th width="80px">MARCA</th>
                <th width="80px">MODELO</th>
                <th width="80px">LOCALIZAÇÃO</th>
            </tr>
        </thead>
        <tbody>

        
            <?php foreach ($patrimonios as $patrimonio) : ?>

            <?php $contador = 1; ?>
                <tr>
                    <td><?php echo $contador++; ?></td>
                    <td><?php echo $patrimonio->id ?></td>
                    <td class="text-left"><?php echo $patrimonio->vc_nome ?></td>
                    <td><?php echo $patrimonio-> vc_estado ?></td>
                    <td><?php echo $patrimonio-> it_quantidade ?></td>
                   <td> <?php echo $patrimonio-> it_valor ?></td>
                    <td><?php echo $patrimonio->it_numfactura  ?></td>
                    <td><?php echo $patrimonio-> it_vidaUtil ?></td>
                    <td><?php echo $patrimonio->vc_utilidade ?></td>
                    <td><?php echo $patrimonio->vc_marca ?></td>
                    <td><?php echo $patrimonio->vc_modelo ?></td>
                    <td><?php echo $patrimonio->vc_localizacao ?></td>
                </tr>

            <?php endforeach; ?>

            <br> 
        </tbody>
    </table>

    <div class="pr">(Responsável da área de gestão de património)</div>
        <div class="patrimonio">
                ______________________________________________________________
                </div>
                <div class="re">Responsável máximo da entidade</div>

                <div class="entidade">
             ___________________________________________________________________
                </div>
              
               


</body>

</html>