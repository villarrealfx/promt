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
        Schema::create('permit_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permit_id')->references('id')->on('permits');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->enum('action',
                        ['created',
                        'requested',
                        'returned',
                        'pre_approved',
                        'approved',
                        'opened',
                        'suspended',
                        'closed',
                        'rescheduled',
                        'modified',
                    ])->default('created');
            $table->string('field', 255)->nullable();
            $table->string('before')->nullable();
            $table->string('after')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permit_records');
    }
};
