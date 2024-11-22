<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('idproduto'); // ID do produto (chave primária)
            $table->string('descricao'); // Descrição do produto
            $table->string('foto'); // Foto do produto (armazenamento do caminho da imagem)
            $table->double('preco', 8, 2); // Preço do produto (com 2 casas decimais)
            $table->integer('estoque'); // Quantidade em estoque
            $table->integer('tipo'); // Tipo do produto
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
