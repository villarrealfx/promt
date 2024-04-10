<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Management;
use App\Models\Dispatch;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Management::create([
            'id' => 0,
            'parent_id' => 0,
            'name' => 'Ministerio del Poder Popular para la Energía Eléctrica',
        ]);

        Dispatch::create([
            'id' => 0,
            'parent_id' => 0,
            'name' => 'Centro Nacional de Despacho',
        ]);
    }
}
