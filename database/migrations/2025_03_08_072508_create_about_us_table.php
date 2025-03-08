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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('description');
            $table->string('first_counter_name');
            $table->string('first_counter_number');

            $table->string('second_counter_name');
            $table->string('second_counter_number');

            $table->string('third_counter_name');
            $table->string('third_counter_number');

            $table->string('fourth_counter_name');
            $table->string('fourth_counter_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
