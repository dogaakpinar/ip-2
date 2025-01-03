<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_team_financials_table.php
    public function up()
    {
        Schema::create('team_financials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained();
            $table->decimal('revenue', 15, 2);
            $table->decimal('expenses', 15, 2);
            $table->decimal('profit', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_financials');
    }

};
