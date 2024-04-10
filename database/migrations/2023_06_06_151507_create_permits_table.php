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
        Schema::create('permits', function (Blueprint $table) {
            $table->id();

            $table->dateTime('requested_for');
            $table->dateTime('approved_for');
            $table->time('duration');
            $table->dateTime('ends_on');
            $table->time('emergency_availability');

            $table->string('work_to_do');
            $table->string('consequence');
            $table->string('precautions');
            $table->string('starting_note');
            $table->string('closing_note');

            $table->enum('status',
                        ['created',
                        'requested',
                        'returned',
                        'pre_approved',
                        'approved',
                        'opened',
                        'suspended',
                        'closed',
                    ])->default('created');
            $table->enum('reason',
                        ['preventive',
                        'corrective',
                        'tests',
                        'others',
                    ])->default('corrective');

            $table->integer('equipment_giving')->unsigned()->default(0);
            $table->boolean('consequences')->default(false);
            $table->boolean('emergency')->default(false);
            $table->boolean('out_of_time')->default(false);

            $table->float('load', 8, 1)->default(0.0);

            $table->foreignId('responsible_id')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permits');
    }
};
