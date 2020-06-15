<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cursus', function (Blueprint $table) {
            $table->bigIncrements('CursusID');
            $table->string('Naam',255);
            $table->string('Beschrijving');
            $table->date('Datum');
            $table->string('Locatie',255);
            $table->timestamp('Begintijd');
            $table->timestamp('Eindtijd');
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
        Schema::dropIfExists('Cursus');
    }
}
