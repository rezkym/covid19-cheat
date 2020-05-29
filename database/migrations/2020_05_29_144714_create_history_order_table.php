<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_order', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->enum('type_order', ['pb', 'ros']);
            $table->string('hdsn');
            $table->integer('duration');
            $table->string('uplink');
            $table->dateTime('expiredTime');
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
        Schema::dropIfExists('history_order');
    }
}
