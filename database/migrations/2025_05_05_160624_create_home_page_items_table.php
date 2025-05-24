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
        Schema::create('home_page_items', function (Blueprint $table) {
            $table->id();
            $table->text('banner_title')->nullable();
            $table->text('banner_description')->nullable();
            $table->text('banner_button_text')->nullable();
            $table->text('banner_button_url')->nullable();
            $table->text('banner_photo');
            $table->text('info_title')->nullable;
            $table->text('info_photo');
            $table->text('portfolio_subtitle')->nullable();
            $table->text('portfolio_title')->nullable();
            $table->text('portfolio_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_items');
    }
};
