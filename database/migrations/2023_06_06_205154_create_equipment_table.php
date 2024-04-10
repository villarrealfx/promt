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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();

            $table->string('code');
            $table->string('description');
            $table->string('operations_warning')->nullable();
            $table->string('maintenance_warning')->nullable();
            $table->string('brand')->nullable();
            $table->string('serial')->nullable()->unique();
            $table->string('comments')->nullable();

            $table->enum('type', ['backbone', 'not_backbone', 'international'])->default('not_backbone');
            $table->enum('belongs_to', ['corpoelec', 'external'])->default('corpoelec');

            $table->boolean('local_procedure')->default(false);

            $table->date('in_service_date');

            $table->float('lenght', 8, 1)->default(0.0);
            $table->float('vain_average', 8, 1)->default(0.0);


            $table->integer('towers')->default(0);

            $table->foreignId('parent_id')->references('id')->on('equipment')->default(0);
            $table->foreignId('facility_id')->references('id')->on('facilities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
