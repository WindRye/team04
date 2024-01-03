<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('types')->comment('屬性');
            $table->string('super_effective1')->nullable()->comment('效果絕佳1');
            $table->string('super_effective2')->nullable()->comment('效果絕佳2');
            $table->string('super_effective3')->nullable()->comment('效果絕佳3');
            $table->string('super_effective4')->nullable()->comment('效果絕佳4');
            $table->string('super_effective5')->nullable()->comment('效果絕佳5');
            $table->string('not_very_effective1')->nullable()->comment('收效甚微1');
            $table->string('not_very_effective2')->nullable()->comment('收效甚微2');
            $table->string('not_very_effective3')->nullable()->comment('收效甚微3');
            $table->string('not_very_effective4')->nullable()->comment('收效甚微4');
            $table->string('not_very_effective5')->nullable()->comment('收效甚微5');
            $table->string('not_very_effective6')->nullable()->comment('收效甚微6');
            $table->string('not_very_effective7')->nullable()->comment('收效甚微7');
            $table->string('not_effective')->nullable()->comment('技能無效');
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
        Schema::dropIfExists('types');
    }
}
