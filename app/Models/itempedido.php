<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    // Define os campos que são atribuíveis em massa
    protected $fillable = ['pedido_id', 'produto_id', 'quantidade', 'preco_unitario'];

    // Define a chave primária (caso seja diferente do padrão 'id')
    protected $primaryKey = 'iditem_pedido';
}
