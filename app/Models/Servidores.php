<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servidores extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'servidores';
    protected $fillable = [

        'nome',
        'email',
        'telefone',
        'img'

    ];
    public function visitas(){
        return $this->hasMany(Visitas::class);
    }
}
