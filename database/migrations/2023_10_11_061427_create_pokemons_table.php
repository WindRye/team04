<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('pokemon')->comment('寶可夢');
            $table->string('region')->nullable()->comment('地區');
            $table->integer('tid1')->unsigned()->comment('屬性編號1');
            $table->integer('tid2')->nullable()->unsigned()->comment('屬性編號2');
            $table->double('height')->nullable()->unsigned()->comment('身高');
            $table->double('weight')->nullable()->unsigned()->comment('體重');
            $table->string('gender')->nullable()->comment('性別');
            $table->string('ability')->comment('特性');
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
        Schema::dropIfExists('pokemons');
    }
}
