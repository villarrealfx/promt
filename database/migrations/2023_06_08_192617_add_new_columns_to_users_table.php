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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('id_type', ['V', 'E', 'P'])->after('id')->default('V');

            $table->integer('identification_card')->after('id_type')->unsigned()->unique();
            $table->integer('staff_number')->after('identification_card')->unsigned()->unique();

            $table->string('last_name')->after('name');
            $table->string('username')->after('last_name');

            $table->string('office_phone', 11)->after('profile_photo_path')->nullable();
            $table->string('cell_phone', 11)->after('office_phone')->nullable();
            $table->string('room_phone', 11)->after('cell_phone')->nullable();

            $table->string('comments')->nullable();

            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'id_type',
                'identification_card',
                'staff_number',
                'last_name',
                'username',
                'office_phone',
                'cell_phone',
                'room_phone',
                'comments',
                'active',
            ]));
        });
    }
};
