<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCheatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_cheat', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->enum('type_cheat', ['pb', 'ros']);
            $table->string('hdsn')->unique();
            $table->dateTime('lastUse');
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
        Schema::dropIfExists('users_cheat');
    }
}
