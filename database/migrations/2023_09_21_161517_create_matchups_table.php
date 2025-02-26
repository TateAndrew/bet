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
        Schema::create('matchups', function (Blueprint $table) {
                $table->id();
                $table->string('match_id')->unique();
                $table->string('HomeTeam');
                $table->string('AwayTeam');
                $table->integer('Sport');
                $table->timestamp('MatchTime');
                $table->string('League')->nullable(); // Only used for soccer
                $table->string('DisplayRegion')->nullable(); // Only used for soccer
                $table->string('HomeROT')->nullable(); // ROT # for home team
                $table->string('AwayROT')->nullable(); // ROT # for away team
                $table->string('HomePitcher')->nullable(); // Home pitcher (MLB only)
                $table->string('AwayPitcher')->nullable(); // Away pitcher (MLB only)
                $table->boolean('Preseason'); // True if preseason
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
        Schema::dropIfExists('matchups');
    }
};
