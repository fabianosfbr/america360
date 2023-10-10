<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\PipelineStages;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\ContactSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\LeadSourceSeeder;
use Database\Seeders\PipelineStageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => Hash::make('asdfasdf'),
        ]);

        $this->call([
            LeadSourceSeeder::class,
            PipelineStageSeeder::class,
            TagSeeder::class,
            ContactSeeder::class,

        ]);
    }
}
