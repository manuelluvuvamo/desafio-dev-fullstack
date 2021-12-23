<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transacao;
use App\Models\Loja;
use App\Imports\TransacaoImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Logger;
use Illuminate\Support\Facades\DB;

use App\Models\Cabecalho;
use Illuminate\Support\Facades\Auth;

class TransacaoController extends Controller
{
    
    private $Logger;
    protected $user;
    public function __construct()
    {

        $this->Logger = new Logger();
    }


    public function loggerData($mensagem)
    {
        $dados_Auth = Auth::user()->vc_primemiroNome . ' ' . Auth::user()->vc_apelido . ' Com o nivel de ' . Auth::user()->vc_tipoUtilizador . ' ';
        $this->Logger->Log('info', $dados_Auth . $mensagem);
    }


    public function index()
    {
        $this->loggerData("Listou as transações");

        // $transacoes = Transacao::where([['it_estado', 1]])->get();
        $transacoes  = DB::table('transacaos')
        ->join('lojas', 'transacaos.id_loja', '=', 'lojas.id')
        ->select(
            'transacaos.*',
            'lojas.nome_loja as nome_loja',
            'lojas.bi_dono as bi',
            'lojas.nome_dono as nome_dono',
        )->orderBy('transacaos.id')->get();
        return view('admin.transacoes.index', compact('transacoes'));
    }
   


    public function create()
    {
        return view('admin.transacoes.cadastrar.index');
    }

    public function salvar(Request $request)
    {
         try {
             
            $extension = strtolower( $request->file->getClientOriginalExtension());
           
            if($extension == "xlsx"){

                $importado = Excel::import(new TransacaoImport, $request->file);
            
         
            
                if($importado){
                    return redirect()->back()->with('status', '1');
                }else{
                    return redirect()->back()->with('aviso', '1');  
                }
            }elseif($extension == "csv" || $extension == "txt"){

                $arquivo_tmp = $request->file;
                $sucesso = true;
                //ler todo o arquivo para um array
                $dados = file($arquivo_tmp);
               // dd( $dados);

                foreach($dados as $linha){
                    $linha = trim($linha);
                    $row = explode(';', $linha);
                   
                    
                    $tipo = $row[0];
                    $data = $row[1];
                    $valor = $row[2];
                    $bi = $row[3];
                    $cartao = $row[4];
                    $hora = $row[5];
                    $dono_loja = $row[6];
                    $nome_loja = $row[7];




                    $loja = Loja::where([["bi_dono",$row[3]]])->where([["nome_loja",$row[7]]])->get()->first();

     
                    if(isset($loja->id)){
                        //dd($loja->id);
            
                        switch ( $row[0]) {
                            case 1:
                           
                                $saldo = ($loja->saldo +  $row[2]);
                         
                                break;
                            case 2:
                                $saldo = ($loja->saldo -  $row[2]);
                                break;
            
                            case 3:
                                 $saldo = ($loja->saldo -  $row[2]);
                                 break;
                                
                             case 4:
                                $saldo = ($loja->saldo +  $row[2]);
                                break;
            
                            case 5:
                                $saldo = ($loja->saldo +  $row[2]);
                                break;
                            
                            case 6:
                                $saldo = ($loja->saldo +  $row[2]);
                                break;
            
                            case 7:
                                 $saldo = ($loja->saldo +  $row[2]);
                                break;
                            case 8:
                                $saldo = ($loja->saldo +  $row[2]);
                                break;
                            case 9:
                                $saldo = ($loja->saldo -  $row[2]);
                                break;
                                
                                
                            default:
                                # code...
                                break;
                        }
                            
                            $loj = Loja::find($loja->id)->update([
            
                                "saldo"=>  $saldo,
            
            
                            ]);
            
                           
                            if ($loj) {
                              $transa = Transacao::create([
                                    //
                                    
                                    'tipo'=>$row[0],
                                    'data'=>date('Y-m-d', strtotime($row[1] )),
                                    'valor'=>doubleval( $row[2]),
                                    'id_loja'=>$loja->id,
                                    'cartao'=>intval($row[4]),
                                    'hora'=>$row[5],
                                    
                                  
                                ]);

                                if($transa){
                                    $sucesso = true;
                                }else{
                                   $sucesso=false;  
                                }
                            }
            
                        
                       
            
                    }else{
            
                        $loja = Loja::create([
            
                            'nome_loja' => $row[7],
                            'nome_dono' => $row[6],
                            'bi_dono' => $row[3],
                            'saldo'=>0,
                            
                        ]);
            
                       
    
            
                        if ($loja) {
                            switch ( $row[0]) {
                                case 1:
                                    $saldo = ($loja->saldo +  $row[2]);
                                    break;
                                case 2:
                                    $saldo = ($loja->saldo -  $row[2]);
                                    break;
                
                                case 3:
                                     $saldo = ($loja->saldo -  $row[2]);
                                     break;
                                    
                                 case 4:
                                    $saldo = ($loja->saldo +  $row[2]);
                                    break;
                
                                case 5:
                                    $saldo = ($loja->saldo +  $row[2]);
                                    break;
                                
                                case 6:
                                    $saldo = ($loja->saldo +  $row[2]);
                                    break;
                
                                case 7:
                                     $saldo = ($loja->saldo +  $row[2]);
                                    break;
                                case 8:
                                    $saldo = ($loja->saldo +  $row[2]);
                                    break;
                                case 9:
                                    $saldo = ($loja->saldo -  $row[2]);
                                    break;
                                    
                                    
                                default:
                                    # code...
                                    break;
                            }
                                $loj = Loja::find($loja->id)->update([
                
                                    "saldo" =>$saldo,
                
                
                                ]);
                
                            
                                if ($loj) {
                                  
                                        //
                                        
                                        $transa = Transacao::create([
                                            //
                                            
                                            'tipo'=>$row[0],
                                            'data'=>date('Y-m-d', strtotime($row[1] )),
                                            'valor'=>doubleval( $row[2]),
                                            'id_loja'=>$loja->id,
                                            'cartao'=>intval($row[4]),
                                            'hora'=>$row[5],
                                            
                                          
                                        ]);

                                        if($transa){
                                           $sucesso = true;
                                        }else{
                                            $sucesso = false;  
                                        }
                                        
                                
                                }
                        }
            
            
                    }

                    
                   	
                }

                if($sucesso){
                    return redirect()->back()->with('status', '1');
                }else{
                    return redirect()->back()->with('aviso', '1');  
                }

            }else{
                return redirect()->back()->with('aviso', '2');  
            }
           
        } catch (\Exception $exception) {
            return redirect()->back()->with('aviso', '1');
        } 
    }
    public function editar($id)
    {
        if ($dados["transacao"] = Transacao::find($id)) :
            $dados["lojas"] = Loja::get();

            $dados["transacao"] = DB::table('transacaos')
            ->join('lojas', 'transacaos.id_loja', '=', 'lojas.id')
            ->select(
                'transacaos.*',
                'lojas.nome_loja as nome_loja',
                'lojas.bi_dono as bi',
                'lojas.nome_dono as nome_dono',
            )->orderBy('transacaos.id')->where([["transacaos.id",$id]])->first();

            $dados["lojaSelecionada"] = Loja::find($dados["transacao"]->id_loja);
            return view('admin.transacoes.editar.index', $dados);
        else :
            return redirect('admin/transacoes/cadastrar')->with('teste', '1');

        endif;
    }


    public function atualizar(Request $input, $id)
    {
        $dados = $input;
      
        // $this->user->update($dados, $id);
        Transacao::find($id)->update([
            "tipo" => $dados->tipo,
            "data" => $dados->data,
            "valor" => $dados->valor,
            "id_loja" => $dados->id_loja,
            "cartao" => $dados->cartao,
            "hora" => $dados->hora,
        ]);

       
        $this->loggerData("Actualizou Transacao");
        if(Auth::user()->vc_tipoUtilizador == 'Administrador') {
            return redirect('admin/transacoes/listar')->with('status', '1');
        }
        return redirect('/')->with('status', '1');
    }

    public function excluir($id)
    {
        //User::find($id)->delete();
        $response = Transacao::find($id);
        $response->delete();
        $this->loggerData("Eliminou Transacao");
        return redirect()->back();
    }
    
}
