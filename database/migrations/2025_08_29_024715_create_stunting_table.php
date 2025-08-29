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
        Schema::create('stunting', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->constrained('users')->onDelete('cascade');
            $table->string('kecamatan');
            $table->integer('jumlah_stunting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stunting');
    }
};
