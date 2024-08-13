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
        // schema::rename("students","student"); // to rename the table
        schema::dropIfExists("users"); // to delete the table
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
