<?php

namespace App\Imports;

use App\Models\Transacao;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransacaoImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Transacao([
            //
            'tipo'=>$row["tipo"],
            'data'=>$row["data"],
            'valor'=>$row["valor"],
            'bi'=>$row["bi"],
            'cartao'=>$row["cartao"],
            'hora'=>$row["hora"],
            'dono_loja'=>$row["dono_loja"],
            'nome_loja'=>$row["nome_loja"],
        ]);
    }
}
