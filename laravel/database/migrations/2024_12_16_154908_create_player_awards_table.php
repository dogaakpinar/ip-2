<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_player_awards_table.php
    public function up()
    {
        Schema::create('player_awards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->string('award_name');
            $table->date('award_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('player_awards');
    }

};
