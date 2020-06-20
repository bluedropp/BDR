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
            $table->string('name');
            $table->string('email',255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->Integer('age');
            $table->Integer('height');
            $table->mediumText('bio');
            $table->boolean('smoking');
            $table->boolean('premium')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last-online-at'); //Pour classer les profiles dans la page centrale
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
