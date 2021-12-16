<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->bigInteger('id_user');
            $table->string('name');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('address');
            $table->string('village');
            $table->string('phone');
            $table->string('metode');
            $table->string('pic_proof')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->foreign('province')->references('code')->on('indonesia_provinces');
            $table->foreign('city')->references('code')->on('indonesia_cities');
            $table->foreign('district')->references('code')->on('indonesia_districts');
            $table->foreign('village')->references('code')->on('indonesia_villages');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('pesanans');
    }
}
