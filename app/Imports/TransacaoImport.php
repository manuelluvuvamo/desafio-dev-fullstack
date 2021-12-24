<?php

namespace App\Imports;

use App\Models\Transacao;
use App\Models\Loja;

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


        $loja = Loja::where([["bi_dono",$row["bi"]]])->where([["nome_loja",$row["nome_loja"]]])->get()->first();

     
        if(isset($loja->id)){
            //dd($loja->id);

            switch ($row["tipo"]) {
                case 1:
               
                    $saldo = ($loja->saldo + $row["valor"]);
             
                    break;
                case 2:
                    $saldo = ($loja->saldo - $row["valor"]);
                    break;

                case 3:
                     $saldo = ($loja->saldo - $row["valor"]);
                     break;
                    
                 case 4:
                    $saldo = ($loja->saldo + $row["valor"]);
                    break;

                case 5:
                    $saldo = ($loja->saldo + $row["valor"]);
                    break;
                
                case 6:
                    $saldo = ($loja->saldo + $row["valor"]);
                    break;

                case 7:
                     $saldo = ($loja->saldo + $row["valor"]);
                    break;
                case 8:
                    $saldo = ($loja->saldo + $row["valor"]);
                    break;
                case 9:
                    $saldo = ($loja->saldo - $row["valor"]);
                    break;
                    
                    
                default:
                    # code...
                    break;
            }
                
                $loj = Loja::find($loja->id)->update([

                    "saldo"=>  $saldo,


                ]);

               
                if ($loj) {
                    return new Transacao([
                        //
                        
                        'tipo'=>$row["tipo"],
                        'data'=>date('Y-m-d', strtotime($row["data"] )),
                        'valor'=>doubleval($row["valor"]),
                        'id_loja'=>$loja->id,
                        'cartao'=>intval($row["cartao"]),
                        'hora'=>date('H:i:s', strtotime($row["hora"] )),
                        
                    ]);
                }

            
           

        }else{

            $loja = Loja::create([

                'nome_loja' => $row["nome_loja"],
                'nome_dono' => $row["dono_loja"],
                'bi_dono' => $row["bi"],
                'saldo'=>0,
                
            ]);


            if ($loja) {
                switch ($row["tipo"]) {
                    case 1:
                        $saldo = ($loja->saldo + $row["valor"]);
                        break;
                    case 2:
                        $saldo = ($loja->saldo - $row["valor"]);
                        break;
    
                    case 3:
                         $saldo = ($loja->saldo - $row["valor"]);
                         break;
                        
                     case 4:
                        $saldo = ($loja->saldo + $row["valor"]);
                        break;
    
                    case 5:
                        $saldo = ($loja->saldo + $row["valor"]);
                        break;
                    
                    case 6:
                        $saldo = ($loja->saldo + $row["valor"]);
                        break;
    
                    case 7:
                         $saldo = ($loja->saldo + $row["valor"]);
                        break;
                    case 8:
                        $saldo = ($loja->saldo + $row["valor"]);
                        break;
                    case 9:
                        $saldo = ($loja->saldo - $row["valor"]);
                        break;
                        
                        
                    default:
                        # code...
                        break;
                }
                    $loj = Loja::find($loja->id)->update([
    
                        "saldo" =>$saldo,
    
    
                    ]);
    
                
                    if ($loj) {
                        return new Transacao([
                            //
                            
                            'tipo'=>$row["tipo"],
                            'data'=>$row["data"],
                            'valor'=>doubleval($row["valor"]),
                            'id_loja'=>$loja->id,
                            'cartao'=>intval($row["cartao"]),
                            'hora'=>date('H:i:s', strtotime($row["hora"] )),
                            
                        ]);
                    }
            }


        }
        
    }
}
