<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Departamento;
use App\Models\AnoLectivo;
use App\Models\Vaga;
use Illuminate\Http\Request;
use App\Models\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VagaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;
    public  $vagas;

    public function __construct(Vaga $vagas)
    {
        $this->Logger = new Logger();
        $this->vagas = $vagas;
    }
    public function loggerData($mensagem)
    {
        $dados_Auth = Auth::user()->vc_nomeUtilizador . ' Com o nivel de ' . Auth::user()->vc_tipoUtilizador . ' ';
        $this->Logger->Log('info', $dados_Auth . $mensagem);
    }
    public function index()
    {
        $dados['vagas'] = $this->vagas->vagas()->where('it_estado', 1);

        //$dados['funcoes'] = vaga::where([['it_estado', 1]])->get();

        return view('admin.vaga.index', $dados);
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
        return view('admin.vaga.cadastrar.index', $dados);
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

            Vaga::create([



                'vc_descricao' => $request->vc_descricao,
                'it_estado' => 1,
                'it_id_area' => $request->it_id_area,
                'it_id_departamento'  => $request->it_id_departamento,
                'it_id_ano_lectivo' => $request->it_id_ano_lectivo,
            ]);
            $this->loggerData("Adicionou Vaga " . $request->vc_descricao);
            return redirect('/admin/vaga')->with('status', '1');
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
        //$vaga = vaga::where([['it_estado_anoLectivo', 1]])->get();
        $dados['vaga'] = $this->vagas->vagas()->where('it_estado', 1)->where('id', $id)->first();

        return view('admin.vaga.visualizar.index', $dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if ($dados['vaga'] = $this->vagas->vagas()->where('it_estado', 1)->where('id', $id)->first()) :
            // dd($dados);
            $dados['areas'] =  Area::where([['it_estado', 1]])->get();
            $dados['departamentos'] =  Departamento::where([['it_estado', 1]])->get();
            $dados['anoslectivos'] =  AnoLectivo::where([['it_estado_anoLectivo', 1]])->get();


            return view('admin.vaga.editar.index', $dados);
        else :
            return redirect('/admin/vaga/cadastrar')->with('vaga', '1');

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
        vaga::find($id)->update([
            'vc_descricao' => $request->vc_descricao,
            'it_estado' => 1,
            'it_id_area' => $request->it_id_area,
            'it_id_departamento'  => $request->it_id_departamento,
            'it_id_ano_lectivo' => $request->it_id_ano_lectivo,
        ]);
        $this->loggerData("Actualizou vaga " . $request->vc_descricao);
        return redirect()->route('admin/vaga');
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
        // vaga::find($id)->delete();
        $response = Vaga::find($id);
        $response->update(['it_estado' => 0]);
        $this->loggerData("Eliminou Vaga " . $response->vc_vaga);
        return redirect()->route('admin/vaga');
    }
}
