<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InscricaoOnline extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);
      return [
                        "vc_primeiroNome" => $this->vc_primeiroNome,
                        "vc_nomedoMeio" => $this->vc_nomedoMeio,
                        "vc_apelido" => $this->vc_apelido,
                        "dt_dataNascimento" => $this->dt_dataNascimento,
                        "vc_nomePai" => $this->vc_nomePai,
                        "vc_nomeMae" => $this->vc_nomeMae,
                        "vc_genero" => $this->vc_genero,
                        "vc_dificiencia" => $this->vc_dificiencia,
                        "vc_estadoCivil" => $this->vc_estadoCivil,
                        "vc_email" => $this->vc_email,
                        "vc_residencia" => $this->vc_residencia,
                        "vc_naturalidade" => $this->vc_naturalidade,
                        "vc_provincia" => $this->Naturality,
                        "vc_bi" => $this->vc_bi,
                        "dt_emissao" => $this->dt_emissao,
                        "vc_localEmissao" => $this->vc_localEmissao,
                        "vc_EscolaAnterior" => $this->vc_EscolaAnterior,
                        "ya_anoConclusao" => $this->ya_anoConclusao,
                        "vc_nomeCurso" => $this->vc_nomeCurso,
                        "vc_classe" => $this->vc_classe,
                        "vc_anoLectivo" =>$this->vc_anoLectivo,
                        "it_estado_candidato" => $this->it_estado_candidato,
                        "vc_vezesdCandidatura" => $this->vc_vezesdCandidatura,
                        "it_telefone"=> $this->it_telefone,
                        "tokenKey" => $this->tokenKey,
                        "LP_S" =>$this->LP_S,
                        "LP_O" =>$this->LP_O,
                        "LP_N" =>$this->LP_N,
                        "MAT_S" =>$this->MAT_S,
                        "MAT_O" =>$this->MAT_O,
                        "MAT_N" =>$this->MAT_N,
                        "FIS_S" =>$this->FIS_S,
                        "FIS_O" =>$this->FIS_O,
                        "FIS_N" =>$this->FIS_N,
                        "QUIM_S" =>$this->QUIM_S,
                        "QUIM_O" =>$this->QUIM_O,
                        "QUIM_N" =>$this->QUIM_N,
                        "estado_de_pagamento" =>$this->estado_de_pagamento,
                        "media" =>$this->media,
                        "state" =>$this->state,
                        "created_at" =>$this->created_at,

      ];

    }
}
