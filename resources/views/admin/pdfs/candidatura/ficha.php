 
 <style>
     <?php echo $stylesheet; ?>
 </style>
 <div id="ficha">
 <img src="images/logotipo/<?php echo $cabecalho->vc_logo; ?>.png" width="100" height="100" class="logo" />
 <div>
     <h3 class="nome_escola"><?php echo $cabecalho->vc_escola; ?> - <?php echo $cabecalho->vc_acronimo; ?>
         <hr>
     </h3>
     <!-- <p class="aviso">No caso de se verificar que o candidato tenha prestado falsas declarações será eliminado da lista de inscrição.</p> -->
 </div>
 <div>
    <strong><p class="inscricaoN" style="margin-bottom:0px;  margin-top:-1%">FICHA DE INSCRIÇÃO Nº: <b><?php echo $candidato->id; ?></b></p></strong>

     <p>
         Data de Inscrição: <b><?php echo date('d-m-Y', strtotime($candidato->created_at)); ?></b><br>
         Inscrição para o Ano Lectivo: <b><?php echo $candidato->vc_anoLectivo ?></b><br>
         Nome do candidato: <b><?php echo ($candidato->vc_primeiroNome . ' ' . $candidato->vc_nomedoMeio . ' ' . $candidato->vc_apelido); ?></b><br>
         Bilhete de Identidade Nº <b><?php echo $candidato->vc_bi; ?></b> <br>
         Curso escolhido: <b><?php echo $candidato->vc_nomeCurso; ?></b><br>
         Codigo de Inscrição: <b><?php echo $candidato->tokenKey; ?></b><br>


     <table style="width: 100%; border:1px solid #ccc">
         <thead>
             <tr style="text-align: left;">
                 <th style="text-align: left;">Disciplina</th>
                 <th style="text-align: left;">7ª Classe</th>
                 <th style="text-align: left;">8ª Classe</th>
                 <th style="text-align: left;">9ª Classe</th>

             </tr>
         </thead>
         <tbody>
             <tr style="">

                 <td style="width: 35%;">Língua Portuguesa</td>
                 <td><?php echo $candidato->LP_S; ?></td>
                 <td><?php echo $candidato->LP_O; ?></td>
                 <td><?php echo $candidato->LP_N; ?></td>

             </tr>
             <tr>
                 <td style="width: 35%;">Matemática</td>
                 <td><?php echo $candidato->MAT_S; ?></td>
                 <td><?php echo $candidato->MAT_O; ?></td>
                 <td><?php echo $candidato->MAT_N; ?></td>

             </tr>
             <tr>
                 <td style="width: 35%;">Física</td>
                 <td><?php echo $candidato->FIS_S; ?></td>
                 <td><?php echo $candidato->FIS_O; ?></td>
                 <td><?php echo $candidato->FIS_N; ?></td>

             </tr>
             <tr>
                 <td style="width: 35%;">Química</td>
                 <td><?php echo $candidato->QUIM_S; ?></td>
                 <td><?php echo $candidato->QUIM_O; ?></td>
                 <td><?php echo $candidato->QUIM_N; ?></td>

             </tr>
         </tbody>

     </table>

     </p>

     <div id="responsavel" style="margin-top:4%; ">
     <!-- <p><?php 
    //  use Illuminate\Support\Facades\Auth;
    //  echo Auth::User()->vc_primemiroNome .' '.Auth::User()->vc_apelido?></p> -->
         <hr style="width: 35%; text-align:center; ">
         <p style="text-align:center; margin-top:-10px;">
             O(A) Responsável
         </p>
     </div>

     <p style="text-align: center; margin-bottom:0px; font-size:12px">Endereço: Luanda, Distrito do Rangel, bairro CTT KM-7 Telefone I: +244 931 313 333
         Telefone II: +244 997 788 768
         Telefone III: +244 222 381 640
         Código Postal nº 3929
         Email I: secretariaitel@hotmail.com
         Email II: geral@itel.gov.ao</p>
 </div>
 <!-- <div class="funcionario">
     <p>O(A) funcionário(a)</p>
     <p>_________________________________</p>
 </div> -->

 <p class="corte" style="text-align: center;">........................................................................................................................................................................ </p>


 <img src="images/logotipo/<?php echo $cabecalho->vc_logo; ?>.png" width="100" height="100" class="logo" />
 <div>
     <h3 class="nome_escola"><?php echo $cabecalho->vc_escola; ?> - <?php echo $cabecalho->vc_acronimo; ?>
         <hr>
     </h3>
     <!-- <p class="aviso">No caso de se verificar que o candidato tenha prestado falsas declarações será eliminado da lista de inscrição.</p> -->
 </div>
 <div>
     <p class="inscricaoN" style="margin-bottom:0px ; margin-top:-1%">FICHA DE INSCRIÇÃO Nº: <b><?php echo $candidato->id; ?></b></p>

     <p>
         Data de Inscrição: <b><?php echo date('d-m-Y', strtotime($candidato->created_at)); ?></b><br>
         Inscrição para o Ano Lectivo: <b><?php echo $candidato->vc_anoLectivo ?></b><br>
         Nome do candidato: <b><?php echo ($candidato->vc_primeiroNome . ' ' . $candidato->vc_nomedoMeio . ' ' . $candidato->vc_apelido); ?></b><br>
         Bilhete de Identidade Nº <b><?php echo $candidato->vc_bi; ?></b> <br>
         Curso escolhido: <b><?php echo $candidato->vc_nomeCurso; ?></b><br>
         Codigo de Inscrição: <b><?php echo $candidato->tokenKey; ?></b><br>


     <table style="width: 100%; border:1px solid #ccc">
         <thead>
             <tr style="text-align: left;">
                 <th style="text-align: left;">Disciplina</th>
                 <th style="text-align: left;">7ª Classe</th>
                 <th style="text-align: left;">8ª Classe</th>
                 <th style="text-align: left;">9ª Classe</th>

             </tr>
         </thead>
         <tbody>
             <tr style="">

                 <td style="width: 35%;">Língua Portuguesa</td>
                 <td><?php echo $candidato->LP_S; ?></td>
                 <td><?php echo $candidato->LP_O; ?></td>
                 <td><?php echo $candidato->LP_N; ?></td>

             </tr>
             <tr>
                 <td style="width: 35%;">Matemática</td>
                 <td><?php echo $candidato->MAT_S; ?></td>
                 <td><?php echo $candidato->MAT_O; ?></td>
                 <td><?php echo $candidato->MAT_N; ?></td>

             </tr>
             <tr>
                 <td style="width: 35%;">Física</td>
                 <td><?php echo $candidato->FIS_S; ?></td>
                 <td><?php echo $candidato->FIS_O; ?></td>
                 <td><?php echo $candidato->FIS_N; ?></td>

             </tr>
             <tr>
                 <td style="width: 35%;">Química</td>
                 <td><?php echo $candidato->QUIM_S; ?></td>
                 <td><?php echo $candidato->QUIM_O; ?></td>
                 <td><?php echo $candidato->QUIM_N; ?></td>

             </tr>
         </tbody>

     </table>

     </p>
     <div id="responsavel" style="margin-top:4%; ">
         <hr style="width: 35%; text-align:center; ">
         <p style="text-align:center; margin-top:-10px;">
             O(A) Responsável
         </p>
     </div>
     <p style="text-align: center; margin-bottom:0px; font-size:12px">Endereço: Luanda, Distrito do Rangel, bairro CTT KM-7 Telefone I: +244 931 313 333
         Telefone II: +244 997 788 768
         Telefone III: +244 222 381 640
         Código Postal nº 3929
         Email I: secretariaitel@hotmail.com
         Email II: geral@itel.gov.ao</p>
 </div>
 
 </div>