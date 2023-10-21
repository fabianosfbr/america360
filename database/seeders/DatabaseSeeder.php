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
use Database\Seeders\RolesAndPermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            LeadSourceSeeder::class,
            PipelineStageSeeder::class,
            TagSeeder::class,
            ContactSeeder::class,
            RolesAndPermissionsSeeder::class,

        ]);

        $admin = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => Hash::make('asdfasdf'),
        ]);
        $admin->assignRole('admin');

        $professor = User::factory()->create([
            'name' => 'Professor',
            'email' => 'professor@email.com',
            'password' => Hash::make('asdfasdf'),
        ]);
        $professor->assignRole('professor');

        $vendedor = User::factory()->create([
            'name' => 'Vendedor',
            'email' => 'vendedor@email.com',
            'password' => Hash::make('asdfasdf'),
        ]);
        $vendedor->assignRole('vendedor');
    }
}
