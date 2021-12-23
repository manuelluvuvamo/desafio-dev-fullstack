<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Cartão de Funcionario</title>
    <style>
        <?php echo $bootstrap;
        echo $css; ?>
    </style>
</head>

<body style="background-image: url('images/cartao/funcionario.jpg');background-position: top left;
             background-repeat: no-repeat;
             background-image-resize: 1;
             background-image-resolution: from-image;">

    <p>
    <section>
        <img src="<?php echo $response->vc_foto ?>" width="60" height="60" class="foto">
        <div class="nome"><?php echo substr($response->vc_primeiroNome . ' ' . $response->vc_ultimoNome, 0, 26); ?></div>
        <div class="funcao"><?php echo  substr($response->vc_funcao, 0, 23); ?></div>
        <div class="bi"><?php echo substr($response->vc_bi, 0, 14); ?></div>
        </div>

    </section>

    </p>
</body>

</html>