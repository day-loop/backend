<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loop_day_actions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('loop_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('loop_action_id');

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
        Schema::dropIfExists('loop_day_actions');
    }
};
