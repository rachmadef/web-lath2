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
        Schema::create('registration_contents', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // persyaratan, prosedur, biaya, dll
            $table->string('title');
            $table->longText('content'); // HTML / JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_contents');
    }
};
