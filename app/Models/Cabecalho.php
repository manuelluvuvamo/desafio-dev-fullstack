<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabecalho extends Model
{
    use HasFactory;
    protected $table = 'cabecalhos';
    protected $fillable = [
        'id', 'vc_logo', 'vc_ensignia', 'vc_escola', 'vc_acronimo', 'vc_nif', 'vc_republica', 'vc_ministerio',
        'vc_endereco', 'it_telefone', 'vc_email', 'vc_nomeDirector',
        'vc_nomeSubdirectorPedagogico', 'vc_nomeSubdirectorAdminFinanceiro'

    ];
}
