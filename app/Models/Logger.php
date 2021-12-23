<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\LogUser;

class Logger extends Model
{
    public function log($nivel, $descricao)
    {

        if (Auth::user()) {
            $candidatura = LogUser::create([
                'it_idUser' => Auth::user()->id,
                'vc_descricao' => $descricao,
            ]);
            $descricao = Auth::user()->vc_nomeUtilizador . '-' . $descricao;
        } else {
            $descricao = 'erro' . '-' . $descricao;
        }
        Log::channel('logUser')->$nivel($descricao);
    }
}
