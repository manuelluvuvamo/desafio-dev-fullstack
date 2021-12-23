<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Listas dos Melhores alunos</title>
    <style>
    <?php echo $bootstrap;
    echo $css;
    ?>
    </style>
</head>

<body>

    <div class=" text-center">
        <p class="center">
            <img src="images/ensignia/<?php echo $cabecalho->vc_ensignia; ?>.png" class="ensignia" >
            <br>
            <span class="Texto">
            <?php echo $cabecalho->vc_republica; ?>
            <br>
            <?php echo $cabecalho->vc_ministerio; ?> <br>
             <?php echo $cabecalho->vc_escola; ?></span>
            <br>
            <img src="images/logotipo/<?php echo $cabecalho->vc_logo; ?>.png" class="logotipo">
        </p>
    </div>
    <div class=" text-center tem">
       QUADRO DE HONRA
    </div>
    <div class=" text-center tema">
        Ano Lectivo: <?php   echo $anoLectivo;
                           ?> &nbsp;&nbsp;&nbsp;
        <?php  echo $classe."ª Classe";
                            ?>&nbsp;&nbsp;&nbsp;
        <?php   echo $trimestre."º Trimestre";
                           ?>
    </div>

    <div class="container">
    <?php foreach($alunos->unique('id') as $al):?>
  
 <?php  
$dados = DB::table('notas')
    ->join('alunnos', 'alunnos.id', '=', 'notas.it_idAluno')
    ->where('alunnos.id',$al->id)
    ->select(DB::raw('round(sum(fl_media)/count(fl_media) )as media'))->get();
    foreach($dados as $media):
    if($media->media >= 14):
?>
 <div  class="card">

 
<div class="card-header"> 
<img src="<?php echo $al->vc_imagem; ?>" class="foto" width="100" height="100">
</div>
 <div class="card-body text-left ">
<span>Nome: </span> <?php echo  $al->vc_primeiroNome." ".$al->vc_ultimoaNome?><br>
<span> Processo: </span> <?php echo $al->id?><br>
<span> Turma: </span> <?php echo $al->vc_nomedaTurma?><br>
<span> Curso: </span> <?php echo $al->vc_nomeCurso?><br>
<span> Média: </span> <?php echo $media->media?><br>
 <img class="right" src="images/images.jpg" alt="" >
 
</div>
 </div>

 <?php  endif; endforeach;   endforeach;?> <br>
    </div>

</body>



</html>
