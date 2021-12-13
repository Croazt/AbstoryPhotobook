<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_produks', function (Blueprint $table) {
            $table->string('id_pesanan');
            $table->bigInteger('id_product');
            $table->string('orientation');
            $table->integer('qty')->default(0);

            $table->primary(['id_pesanan', 'id_product', 'orientation']);
            $table->foreign('id_pesanan')->references('id')->on('pesanans');
            $table->foreign('id_product')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_produks');
    }
}
