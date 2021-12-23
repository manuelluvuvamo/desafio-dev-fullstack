<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transacao;
use Illuminate\Validation\Rules;
use App\Repositories\Eloquent\UtilizadorRepository;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;
use App\Imports\TransacaoImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Logger;

use App\Models\Cabecalho;
use Illuminate\Support\Facades\Auth;

class TransacaoController extends Controller
{
    use PasswordValidationRules;
    private $Logger;
    protected $user;
    public function __construct(UtilizadorRepository $user)
    {
        $this->user = $user;
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

        $transacoes = User::where([['it_estado_user', 1]])->get();
        return view('admin.transacoes.index', compact('transacoes'));
    }
    public function imprimir_lista()
    {
        $data['cabecalho'] = Cabecalho::find(1);
        $data["bootstrap"] = file_get_contents("css/listas/bootstrap.min.css");
        $data["css"] = file_get_contents("css/listas/style.css");

        $mpdf = new \Mpdf\Mpdf();

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $this->loggerData("Imprimiu Lita de Utilizador");
        $html = view("admin/pdfs/listas/funcionario/index", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("listasdFuncionarios.pdf", "I");
    }


    public function create()
    {
        return view('admin.transacoes.cadastrar.index');
    }

    public function salvar(Request $request)
    {
        try {
            

            $importado = Excel::import(new TransacaoImport, $request->file);
            
         
            
            if($importado){
                return redirect()->back()->with('status', '1');
            }else{
                return redirect()->back()->with('aviso', '1');  
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('aviso', '1');
        }
    }
    public function editar($id)
    {
        if ($user = User::where([['it_estado_user', 1]])->find($id)) :

            return view('admin.users.editar.index', compact('user'));
        else :
            return redirect('admin/users/cadastrar')->with('teste', '1');

        endif;
    }


    public function atualizar(Request $input, $id)
    {
        $dados = $input;
        $dados->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // $this->user->update($dados, $id);
        User::find($id)->update([
            "vc_nomeUtilizador" => $dados->vc_nomeUtilizador,
            "vc_tipoUtilizador" => $dados->vc_tipoUtilizador,
            "vc_telefone" => $dados->vc_telefone,
            "vc_genero" => $dados->vc_genero,
            "vc_email" => $dados->vc_email,
            "password" => bcrypt($dados->password),
        ]);
        // dd($input, $dados);
        $this->loggerData("Actualizou Utilizador");
        if(Auth::user()->vc_tipoUtilizador == 'Administrador') {
            return redirect('admin/users/listar')->with('status', '1');
        }
        return redirect('/')->with('status', '1');
    }

    public function excluir($id)
    {
        //User::find($id)->delete();
        $response = User::find($id);
        $response->update(['it_estado_user' => 0]);
        $this->loggerData("Eliminou Utilizador");
        return redirect()->back();
    }
    public function editar_nivel($id, $nivel)
    {
        $user =  User::find($id)->update(['vc_tipoUtilizador' => $nivel]);
        return response()->json($user);
    }
}
