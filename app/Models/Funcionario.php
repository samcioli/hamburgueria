<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    // Definir os campos preenchíveis
    protected $fillable = ['matricula', 'login', 'senha'];
}

