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
        Schema::table('petitioners', function (Blueprint $table) {
            $table->foreignId('role_id')->after('id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('petitioners', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'role_id'
            ]));
        });
    }
};
