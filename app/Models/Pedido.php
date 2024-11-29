<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Define os campos que são atribuíveis em massa
    protected $fillable = ['pessoa_id', 'status', 'data_pedido', 'total'];

    // Define a chave primária (caso seja diferente do padrão 'id')
    protected $primaryKey = 'idpedido';
}
