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
        Schema::create('matchup_odds', function (Blueprint $table) {
            $table->id();
            $table->integer('matchup_id');
            $table->unsignedBigInteger('EventID');
            $table->unsignedBigInteger('SiteID');
            $table->decimal('MoneyLineHome', 10, 2);
            $table->decimal('MoneyLineAway', 10, 2);
            $table->decimal('DrawLine', 10, 2)->nullable();
            $table->decimal('PointSpreadHome', 10, 2)->nullable();
            $table->decimal('PointSpreadAway', 10, 2)->nullable();
            $table->decimal('PointSpreadHomeLine', 10, 2)->nullable();
            $table->decimal('PointSpreadAwayLine', 10, 2)->nullable();
            $table->decimal('TotalNumber', 10, 2);
            $table->decimal('OverLine', 10, 2);
            $table->decimal('UnderLine', 10, 2);
            $table->timestamp('LastUpdated');
            $table->string('OddType');
            $table->json('Participant')->nullable();
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
        Schema::dropIfExists('matchup_odds');
    }
};
