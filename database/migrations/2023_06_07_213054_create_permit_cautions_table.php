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
        Schema::create('permit_cautions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('permit_id')->references('id')->on('permits');
            $table->foreignId('caution_id')->references('id')->on('cautions');

            $table->boolean('checked')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permit_cautions');
    }
};
