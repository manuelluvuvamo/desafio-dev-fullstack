<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Logger;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $Logger;
    public function __construct()
    {
        $this->middleware('auth');
        $this->Logger = new Logger();
    }
    public function loggerData($mensagem){
        $dados_Auth = Auth::user()->vc_primemiroNome.' '.Auth::user()->vc_apelido.' Com o nivel de '.Auth::user()->vc_tipoUtilizador.' ';
        $this->Logger->Log('info', $dados_Auth.$mensagem);
    }

    public function raiz()
    {
        

            $response[''] = null;



        return view('admin.index', $response);
    }
}
