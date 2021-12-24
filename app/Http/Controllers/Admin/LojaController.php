<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Transacao;
use App\Models\Loja;
use Illuminate\Http\Request;
use App\Models\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LojaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;
    

    public function __construct()
    {
        $this->Logger = new Logger();
       
    }
    public function loggerData($mensagem)
    {
        $dados_Auth = Auth::user()->vc_nomeUtilizador . ' Com o nivel de ' . Auth::user()->vc_tipoUtilizador . ' ';
        $this->Logger->Log('info', $dados_Auth . $mensagem);
    }
    public function index()
    {
     

        $dados['lojas'] = Loja::get();

        return view('admin.lojas.index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       
        return view('admin.lojas.cadastrar.index');
    }

    public function salvar (Request $request)
    {
        
        try {

            $loja = Loja::create([

                'nome_loja' => $request->nome_loja,
                'nome_dono' =>  $request->nome_dono,
                'bi_dono' =>$request->bi_dono,
                'saldo'=>$request->saldo,
                
            ]);
            $this->loggerData("Adicionou loja " . $request->nome_loja);
            return redirect()->back()->with('status', '1');
        } catch (\Exception $exception) {
            return redirect()->back()->with('aviso', '1');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function editar($id)
    {

        if ($dados['loja'] = Loja::find($id)->first()) :
           
            return view('admin.lojas.editar.index', $dados);
        else :
            return redirect('/admin/loja/cadastrar')->with('loja', '1');

        endif;
    }

    public function atualizar (Request $request, $id)
    {
        //
        Loja::find($id)->update([
            'nome_loja' => $request->nome_loja,
            'nome_dono' =>  $request->nome_dono,
            'bi_dono' =>$request->bi_dono,
            'saldo'=>$request->saldo,
        ]);
        $this->loggerData("Actualizou loja " . $request->nome_loja);
        return redirect('admin/lojas/listar')->with('status', '1');
    }

   
    public function excluir ($id)
    {
        //
        // Loja::find($id)->delete();
        $response = Loja::find($id);
        Loja::find($id)->delete();
      
        $this->loggerData("Eliminou loja " . $response->nome_loja);
        return redirect()->back();
    }
}
