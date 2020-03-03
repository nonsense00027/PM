<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motherboard')->nullable();
            $table->string('cpu')->nullable();
            $table->string('hdd')->nullable();
            $table->string('memory')->nullable();
            $table->string('monitor')->nullable();
            $table->string('case')->nullable();
            $table->string('keyboard')->nullable();
            $table->string('mouse')->nullable();
            $table->string('video_card')->nullable();
            $table->string('power_supply')->nullable();
            $table->string('printer')->nullable();
            $table->string('telephone')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
