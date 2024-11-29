<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    // Define os campos que são atribuíveis em massa
    protected $fillable = ['nome', 'email', 'data_nascimento'];

    // Define a chave primária (caso seja diferente do padrão 'id')
    protected $primaryKey = 'idpessoa';
}
