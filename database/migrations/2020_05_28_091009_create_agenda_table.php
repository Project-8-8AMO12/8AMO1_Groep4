<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Agenda', function (Blueprint $table) {
            $table->bigIncrements('agendaID');
            $table->timestamps();
            $table->string('gebeurtenis',255);
            $table->date('datum');
            $table->time('time');
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
        Schema::dropIfExists('Agenda');
    }
}
