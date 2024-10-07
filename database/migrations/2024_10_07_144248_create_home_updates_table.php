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
        Schema::create('home_updates', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('site_name')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('heroimg_1')->nullable();
            $table->string('heroimg_2')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_updates');
    }
};
