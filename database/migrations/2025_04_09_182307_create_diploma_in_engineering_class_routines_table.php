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
        Schema::create('diploma_in_engineering_class_routines', function (Blueprint $table) {
            $table->id();
            $table->string('civil_1st_semester_routine_image')->nullable();
            $table->string('civil_2nd_semester_routine_image')->nullable();
            $table->string('civil_3nd_semester_routine_image')->nullable();
            $table->string('civil_4nd_semester_routine_image')->nullable();
            $table->string('civil_5nd_semester_routine_image')->nullable();
            $table->string('civil_6nd_semester_routine_image')->nullable();
            $table->string('civil_7nd_semester_routine_image')->nullable();

            $table->string('computer_1st_semester_routine_image')->nullable();
            $table->string('computer_2nd_semester_routine_image')->nullable();
            $table->string('computer_3nd_semester_routine_image')->nullable();
            $table->string('computer_4nd_semester_routine_image')->nullable();
            $table->string('computer_5nd_semester_routine_image')->nullable();
            $table->string('computer_6nd_semester_routine_image')->nullable();
            $table->string('computer_7nd_semester_routine_image')->nullable();

            $table->string('electrical_1st_semester_routine_image')->nullable();
            $table->string('electrical_2nd_semester_routine_image')->nullable();
            $table->string('electrical_3nd_semester_routine_image')->nullable();
            $table->string('electrical_4nd_semester_routine_image')->nullable();
            $table->string('electrical_5nd_semester_routine_image')->nullable();
            $table->string('electrical_6nd_semester_routine_image')->nullable();
            $table->string('electrical_7nd_semester_routine_image')->nullable();

            $table->string('electronics_1st_semester_routine_image')->nullable();
            $table->string('electronics_2nd_semester_routine_image')->nullable();
            $table->string('electronics_3nd_semester_routine_image')->nullable();
            $table->string('electronics_4nd_semester_routine_image')->nullable();
            $table->string('electronics_5nd_semester_routine_image')->nullable();
            $table->string('electronics_6nd_semester_routine_image')->nullable();
            $table->string('electronics_7nd_semester_routine_image')->nullable();

            $table->string('telecommunication_1st_semester_routine_image')->nullable();
            $table->string('telecommunication_2nd_semester_routine_image')->nullable();
            $table->string('telecommunication_3nd_semester_routine_image')->nullable();
            $table->string('telecommunication_4nd_semester_routine_image')->nullable();
            $table->string('telecommunication_5nd_semester_routine_image')->nullable();
            $table->string('telecommunication_6nd_semester_routine_image')->nullable();
            $table->string('telecommunication_7nd_semester_routine_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diploma_in_engineering_class_routines');
    }
};
