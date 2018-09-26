<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regiao';

    public function todasRegioes()
    {
        return self::all();
    }
}
