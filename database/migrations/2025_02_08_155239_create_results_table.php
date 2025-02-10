<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('student_id')->constrained()->onDelete('cascade'); // Foreign key for students
            $table->foreignId('subject_id')->constrained()->onDelete('cascade'); // Foreign key for subjects
            $table->float('score'); // The score or marks obtained
            $table->string('term'); // Term/semester (optional)
            $table->timestamps(); // Created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
