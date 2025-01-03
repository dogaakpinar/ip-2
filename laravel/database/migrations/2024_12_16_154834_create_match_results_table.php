<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_match_results_table.php
    public function up()
    {
        Schema::create('match_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained();
            $table->integer('home_team_score');
            $table->integer('away_team_score');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('match_results');
    }

};
