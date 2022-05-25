<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->id();
        $table->integer('cep',8);
        $table->integer('rg',8);
        $table->integer('telefone',11);
        /*chave estrangeira*/

        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');

        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
};
