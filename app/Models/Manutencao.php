<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;
    protected $table='manutencoes';

    public function carro()
    {
        return $this->belongsTo('App\Models\Carro');
    }
    public function modelo()
    {
        return $this->belongsTo('App\Models\Modelo');
    }

}
