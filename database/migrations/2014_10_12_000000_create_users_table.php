<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('UserID');
            $table->string('Username');
            $table->string('Password');
            $table->string('Voornaam');
            $table->string('Achternaam');
            $table->integer("Role");
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('gemaakt_op')->nullable()->default(null);
            $table->timestamp('veranderd_op')->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
