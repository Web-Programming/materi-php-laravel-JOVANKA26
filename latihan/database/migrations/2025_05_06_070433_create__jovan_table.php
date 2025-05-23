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
        Schema::create('_jovan', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 11)->unique();
            $table->string('name', 150);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir',); //yyyy-mm-dd
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_jovan');
    }
};
