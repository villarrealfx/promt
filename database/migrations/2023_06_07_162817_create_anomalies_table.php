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
        Schema::create('anomalies', function (Blueprint $table) {
            $table->id();

            $table->string('description');
            $table->string('comments');

            $table->enum('type', ['normal', 'urgent', 'immediate'])->default('normal');

            $table->foreignId('equipment_id')->references('id')->on('equipment');
            $table->foreignId('reported_by')->references('id')->on('users');
            $table->foreignId('opened_by')->references('id')->on('users');
            $table->foreignId('notified')->references('id')->on('users');
            $table->foreignId('resolved_by')->references('id')->on('users');
            $table->foreignId('closed_by')->references('id')->on('users');
            $table->foreignId('department_id')->references('id')->on('departments');

            $table->datetime('reported_on');
            $table->dateTime('resolved_on')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anomalies');
    }
};
