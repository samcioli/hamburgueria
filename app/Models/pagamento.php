<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    // Define os campos que são atribuíveis em massa
    protected $fillable = ['pedido_id', 'valor_pago', 'data_pagamento', 'metodo_pagamento'];

    // Define a chave primária (caso seja diferente do padrão 'id')
    protected $primaryKey = 'idpagamento';
}
