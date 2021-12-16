<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->string('id_pesanan');
            $table->bigInteger('id_product');
            $table->string('Judul Album')->nullable();
            $table->string('Request')->nullable();
            $table->string('Preview')->nullable();

            $table->primary(['id_pesanan', 'id_product']);
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
        Schema::dropIfExists('photo_albums');
        Schema::dropIfExists('albums');
    }
}
