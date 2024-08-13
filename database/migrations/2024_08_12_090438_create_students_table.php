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
        Schema::create('students', function (Blueprint $table) {
            // $table->id();
            // $table->string('name',30);
            // $table->string('email');
            // $table->float('percentage',3);
            $table->id('student_id');
            $table->string('name',30);
            $table->string('email')->unique('email')->nullable();
            $table->float('percentage',3)->comment('student percentage');
            $table->integer(30)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
