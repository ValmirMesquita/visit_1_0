<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orgaos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orgaos';
    protected $fillable =[
        'nome',
        'sigla',
        'email',
        'telefone',
        'setor_lotacao',
        'data_lotacao'

    ];

    public function visitas(){
        return $this->hasMany(Visitas::class);
    }
}

