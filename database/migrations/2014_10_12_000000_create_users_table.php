<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('prenom');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->Integer('age');
            $table->Integer('taille');
            $table->string('pseudo');
            $table->string('genre');
            $table->boolean('fumeur');
            $table->string('hobby');
            $table->mediumText('bio');
            $table->boolean('premium')->default(0);
            $table->string('PP');
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
