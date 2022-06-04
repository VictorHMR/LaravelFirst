<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaixaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixa', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 100);
            $table->integer('num')->unsigned();
            $table->double('duracao', 10,2)->unsigned();
            $table->interger('album_pert')->unsigned();
            $table->foreign('album_pert')->references('id')->on('album');
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
        Schema::dropIfExists('faixa');
    }
}
