<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pagina', function (Blueprint $table) {
            $table->bigIncrements('PageID');
            $table->string('Titel',255);
            $table->string('SubTitel',255);
            $table->string('Tekst',255);
            $table->boolean('hidden');
            $table->string('footer',255);
            $table->string('auteur',255);
            $table->timestamp('gemaakt_op')->nullable()->default(null);
            $table->timestamp('veranderd_op')->nullable()->default(null);
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
        Schema::dropIfExists('Pagina');
    }
}
