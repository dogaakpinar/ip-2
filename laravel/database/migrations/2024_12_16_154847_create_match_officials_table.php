<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_match_officials_table.php
    public function up()
    {
        Schema::create('match_officials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('role', ['referee', 'assistant_referee']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('match_officials');
    }

};
