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
        Schema::create('info_twos', function (Blueprint $table) {
            $table->id();
             $table->text('left_wrap_title');
            $table->text('left_wrap_description');
            $table->text('bottom_wrap_title1');
            $table->text('bottom_wrap_description1');
            $table->text('bottom_wrap_title2');
            $table->text('bottom_wrap_description2');
            $table->text('left_wrap_photo');
            $table->text('bottom_wrap_photo1');
            $table->text('bottom_wrap_photo2');
            $table->text('right_photo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_twos');
    }
};
