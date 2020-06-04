<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStertselaarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stertselaar', function (Blueprint $table) {
            $table->bigIncrements('StertselaarID');
            $table->string('Naam',255);
            $table->date('Datum');
            $table->string('stertselaar_url',255);
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
        Schema::dropIfExists('Stertselaar');
    }
}
