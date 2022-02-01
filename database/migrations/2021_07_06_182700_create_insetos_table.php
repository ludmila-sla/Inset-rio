<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nomecientifico');
            $table->string('autor');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insetos');
    }
}
