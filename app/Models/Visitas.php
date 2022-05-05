<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'visitas';
    protected $fillable = [

        'assunto',
        'data_entrada',
        'hora_entrada',
        'data_saida',
        'hora_saida',
        'orgaos_id',
        'servidores_id',
        'visitantes_id'
    ];


    public function visitante()
    {
        return $this->belongsTo(Visitantes::class);
    }

    public function servidor()
    {
        return $this->belongsTo(Servidores::class);
    }

    public function orgao()
    {
        return $this->belongsTo(Orgaos::class);
    }
}
