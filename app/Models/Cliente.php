<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Define os campos que são atribuíveis em massa
    protected $fillable = ['status'];

    // Define a chave primária
    protected $primaryKey = 'idcliente';
}
