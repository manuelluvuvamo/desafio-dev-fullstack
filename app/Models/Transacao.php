<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transacao extends Model
{
    use HasFactory;

    protected $table = "transacaos";

    protected $fillable = [
        'tipo',
        'data',
        'valor',
        'bi',
        'cartao',
        'hora',
        'dono_loja',
        'nome_loja',
    ];


}
