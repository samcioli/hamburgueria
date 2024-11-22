<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Definir os campos preenchíveis
    protected $fillable = ['descricao', 'foto', 'preco', 'estoque', 'tipo'];
}
