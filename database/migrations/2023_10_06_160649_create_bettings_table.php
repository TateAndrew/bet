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
        Schema::create('bettings', function (Blueprint $table) {
            $table->id();
            $table->string('match_id', 100);
            $table->integer('user_id')->unsigned();
            $table->integer('TeamROT');
            $table->float('pts')->nullable();
            $table->float('line')->nullable();
            $table->float('bet_amount')->nullable();
            $table->float('win_amount')->nullable();
            $table->char('Type', 4);
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
        Schema::dropIfExists('bettings');
    }
};
