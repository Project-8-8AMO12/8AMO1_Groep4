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
            $table->timestamp('Begintijd')->nullable()->default(null);
            $table->timestamp('Eindtijd')->nullable()->default(null);
            $table->timestamp('gemaakt_op')->nullable()->default(null);
            $table->timestamp('veranderd_op')->nullable()->default(null);
            $table->integer('PageID')->unsigned();
//            $table->foreign('PageID')->references('PageID')->on('Pagina');
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
