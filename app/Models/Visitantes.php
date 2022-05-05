<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitantes extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'visitantes';
    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'rg',
        'email',
        'telefone',
        'img',
        'data_nascimento',
        'endereco'

    ];
    // public function servidores()
    // {
    //     return $this->hasMany(Servidores::class);
    // }

    // public function visitas(){
    //     return $this->hasMany(Visitas::class);
    // }
}
