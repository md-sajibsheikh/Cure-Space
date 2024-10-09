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
        Schema::create('about_updates', function (Blueprint $table) {
            $table->id();
            $table->integer('experience');
            $table->string('title');
            $table->string('description');
            $table->string('touch1')->nullable();
            $table->string('touch2')->nullable();
            $table->string('touch3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_updates');
    }
};
