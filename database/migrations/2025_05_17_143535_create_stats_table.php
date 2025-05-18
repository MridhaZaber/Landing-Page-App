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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->text('stat1_title')->nullable();
            
            $table->text('stat1_number')->nullable();
            $table->text('stat2_title')->nullable();
           
            $table->text('stat2_number')->nullable();
            $table->text('stat3_title')->nullable();
          
            $table->text('stat3_number')->nullable();
            $table->text('stat4_title')->nullable();
           
            $table->text('stat4_number')->nullable();
            $table->text('background')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
