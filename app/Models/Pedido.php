<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos'; // Caso o nome da tabela seja diferente do plural do nome da classe

    protected $fillable = ['horario', 'total']; // Atributos que podem ser preenchidos em massa
}
