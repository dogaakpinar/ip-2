<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_fan_engagements_table.php
    public function up()
    {
        Schema::create('fan_engagements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->integer('engagement_score');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fan_engagements');
    }

};
