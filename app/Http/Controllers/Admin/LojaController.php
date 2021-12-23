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
     

        $dados['lojas'] = Loja::where([['it_estado', 1]])->get();

        return view('admin.loja.index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $dados['areas'] =  Area::where([['it_estado', 1]])->get();
        $dados['departamentos'] =  Departamento::where([['it_estado', 1]])->get();
        $dados['anoslectivos'] =  AnoLectivo::where([['it_estado_anoLectivo', 1]])->get();
        return view('admin.loja.cadastrar.index', $dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        try {

            Loja::create([



                'vc_descricao' => $request->vc_descricao,
                'it_estado' => 1,
                'it_id_area' => $request->it_id_area,
                'it_id_departamento'  => $request->it_id_departamento,
                'it_id_ano_lectivo' => $request->it_id_ano_lectivo,
            ]);
            $this->loggerData("Adicionou loja " . $request->vc_descricao);
            return redirect('/admin/loja')->with('status', '1');
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
    public function show($id)
    {
        //
        //$loja = Loja::where([['it_estado_anoLectivo', 1]])->get();
        $dados['loja'] = $this->lojas->lojas()->where('it_estado', 1)->where('id', $id)->first();

        return view('admin.loja.visualizar.index', $dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if ($dados['loja'] = $this->lojas->lojas()->where('it_estado', 1)->where('id', $id)->first()) :
            // dd($dados);
            $dados['areas'] =  Area::where([['it_estado', 1]])->get();
            $dados['departamentos'] =  Departamento::where([['it_estado', 1]])->get();
            $dados['anoslectivos'] =  AnoLectivo::where([['it_estado_anoLectivo', 1]])->get();


            return view('admin.loja.editar.index', $dados);
        else :
            return redirect('/admin/loja/cadastrar')->with('loja', '1');

        endif;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Loja::find($id)->update([
            'vc_descricao' => $request->vc_descricao,
            'it_estado' => 1,
            'it_id_area' => $request->it_id_area,
            'it_id_departamento'  => $request->it_id_departamento,
            'it_id_ano_lectivo' => $request->it_id_ano_lectivo,
        ]);
        $this->loggerData("Actualizou loja " . $request->vc_descricao);
        return redirect()->route('admin/loja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // Loja::find($id)->delete();
        $response = Loja::find($id);
        $response->update(['it_estado' => 0]);
        $this->loggerData("Eliminou loja " . $response->vc_loja);
        return redirect()->route('admin/loja');
    }
}
