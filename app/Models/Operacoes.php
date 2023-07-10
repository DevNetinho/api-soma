<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacoes extends Model
{
    use HasFactory;

    protected $fillable = ['tipo_operacao', 'operacao'];

}
