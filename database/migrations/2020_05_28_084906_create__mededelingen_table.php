<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMededelingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mededelingen', function (Blueprint $table) {
            $table->bigIncrements('MededelingenID');
//            $table->foreign('userID')->references('UserID')->on('users');
            $table->string('Titel',255);
            $table->date('Datum');
            $table->binary('Foto');
            $table->string('Tekst',255);
            $table->timestamp('gemaakt_op')->nullable()->default(null);
            $table->timestamp('veranderd_op')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mededelingen');
    }
}
