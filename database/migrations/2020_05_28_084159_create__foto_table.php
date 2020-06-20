<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Foto', function (Blueprint $table) {
            $table->bigIncrements('FotoID');
            $table->string('foto_url',255);
            $table->timestamp('gemaakt_op');
            $table->timestamp('veranderd_op');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Foto');
    }
}
