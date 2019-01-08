<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reserveringen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserveringen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->integer('telefoon');
            $table->integer('aantal_personen');
            $table->integer('tafel');
            $table->date('datum');
            $table->time('tijd');
            $table->boolean('reservering_gebruikt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserveringen');
    }
}
