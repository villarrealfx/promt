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
        Schema::create('anomaly_permit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anomaly_id')->references('id')->on('anomalies');
            $table->foreignId('permit_id')->references('id')->on('permits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anomaly_permit');
    }
};
