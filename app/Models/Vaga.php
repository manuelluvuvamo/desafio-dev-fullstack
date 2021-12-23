<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vaga extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'vc_descricao',
        'it_estado',
        'it_id_area',
        'it_id_departamento',
        'it_id_ano_lectivo',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, "id");
    }

    public function vagas()
    {

        $dados = DB::table('vagas')
            ->join('areas', 'vagas.it_id_area', '=', 'areas.id')
            ->join('departamentos', 'vagas.it_id_departamento', '=', 'departamentos.id')
            ->join('anoslectivos', 'vagas.it_id_ano_lectivo', '=', 'anoslectivos.id')
            ->select(
                'vagas.*',
                'areas.vc_nome as vc_area',
                'departamentos.vc_nome as vc_departamento',
                'anoslectivos.ya_inicio',
                'anoslectivos.ya_fim',
            )->orderBy('id')->get();
        return $dados;
    }
}
