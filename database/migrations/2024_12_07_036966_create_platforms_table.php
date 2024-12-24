<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->string('url');
            $table->foreignId('icon_id'); 
            $table->foreignId('game_id'); 
            $table->timestamps();
        });

        Schema::table('platforms', function (Blueprint $table) {
            $table->foreign('icon_id')->references('id')->on('icons')->cascadeOnDelete();
            $table->foreign('game_id')->references('id')->on('games')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platforms');
    }
};
