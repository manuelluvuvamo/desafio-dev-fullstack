<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LogUser extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = [
        'it_idUser',
        'vc_descricao',
    ];

    public  function LogsForSearch($anoLectivo, $utilizador)
    {

        $response['logs'] = DB::table('logs')
            ->join('users', 'users.id', '=', 'logs.it_idUser')
            ->select('logs.*', 'users.vc_nomeUtilizador', 'users.vc_email')
            ->whereYear('logs.created_at', '=', $anoLectivo)
            ->where([
                ['users.vc_email', '=', $utilizador]
            ]);
        if ($anoLectivo == 'Todos' && $utilizador == 'Todos') {
            $response['logs'] = DB::table('logs')
                ->join('users', 'users.id', '=', 'logs.it_idUser')
                ->select('logs.*', 'users.vc_nomeUtilizador', 'users.vc_email');
        } else if ($anoLectivo == 'Todos' && $utilizador) {

            $response['logs'] = DB::table('logs')
                ->join('users', 'users.id', '=', 'logs.it_idUser')
                ->select('logs.*', 'users.vc_nomeUtilizador', 'users.vc_email')
                ->where([
                    ['users.vc_email', '=', $utilizador]
                ]);
        } else if ($utilizador == 'Todos' && $anoLectivo) {
            $response['logs'] = DB::table('logs')
                ->join('users', 'users.id', '=', 'logs.it_idUser')
                ->select('logs.*', 'users.vc_nomeUtilizador', 'users.vc_email')
                ->whereYear('logs.created_at', '=', $anoLectivo);
        }

        return  $response['logs']->get();
    }
}
