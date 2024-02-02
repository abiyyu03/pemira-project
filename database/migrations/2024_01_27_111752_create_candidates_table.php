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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_number')->unique();
            $table->unsignedBigInteger('leader_id');
            $table->foreign('leader_id')->references('id')->on('users');
            $table->unsignedBigInteger('vice_leader_id');
            $table->foreign('vice_leader_id')->references('id')->on('users');
            $table->text('vision_mission');
            $table->enum('category', ["Badan Eksekutif Mahasiswa", "Himpunan Mahasiswa Teknik Informatika", "Himpunan Mahasiswa Sistem Informasi"]);
            $table->string('photo')->nullable()->default("default.png");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
