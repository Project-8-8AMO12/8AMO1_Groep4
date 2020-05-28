<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursussenInschrijvenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cursussen_inschrijven', function (Blueprint $table) {
            $table->bigIncrements('Cursussen_inschrijvenID');
            $table->integer('UserID');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->integer('CursusID');
            $table->foreign('CursusID')->references('CursusID')->on('Cursus');
            $table->timestamp('gemaakt_op');
            $table->timestamp('veranderd_op');
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
        Schema::dropIfExists('Cursussen_inschrijven');
    }
}
