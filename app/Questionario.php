<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Questionario extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'questionario';
    protected $fillable = [
        'nome', 'end_residencial', 'ponto_referencia','bairro','end_visita',
        'ponto_referencia_v','bairro_end_v','telefone','melhor_turno','estado_civil',
        'filhos','faixa_filhos','filhos_agressor','escolaridade','etnia','idade','religiao',
        'profissao','ultimo_emprego','trabalha','local_trabalho','renda','responsavel_sustento',
        'origem_solicitacao','guarnicao','mpu','data_visita','risco'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
