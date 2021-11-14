<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->string('password');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('village');
            $table->string('phone');
            $table->string('pic');
            $table->foreign('province')->references('code')->on('indonesia_provinces');
            $table->foreign('city')->references('code')->on('indonesia_cities');
            $table->foreign('district')->references('code')->on('indonesia_districts');
            $table->foreign('village')->references('code')->on('indonesia_villages');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
