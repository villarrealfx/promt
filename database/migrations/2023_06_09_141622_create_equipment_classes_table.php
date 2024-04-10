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
        Schema::create('equipment_classes', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->boolean('has_brand')->default(false);
            $table->boolean('has_serial')->default(false);
            $table->boolean('has_lenght')->default(false);
            $table->boolean('has_towers')->default(false);
            $table->boolean('has_vain')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_classes');
    }
};
