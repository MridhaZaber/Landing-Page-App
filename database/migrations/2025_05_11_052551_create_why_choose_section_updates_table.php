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
        Schema::create('why_choose_section_updates', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('title1')->nullable();
            $table->text('title')->nullable();
            $table->text('title3')->nullable();
            $table->text('title4')->nullable();
            $table->text('title5')->nullable();
            $table->text('title6')->nullable();
            $table->text('description')->nullable();
            $table->text('button_name')->nullable();
            $table->text('button_url')->nullable();
            $table->text('photo');
            $table->text('background_photo');
            $table->text('photo1');
            $table->text('photo2');
            $table->text('photo3');
            $table->text('photo4');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_section_updates');
    }
};
