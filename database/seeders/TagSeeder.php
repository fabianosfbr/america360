<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Baixo',
            'Medio',
            'Alta',
            'VIP'
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'color' => sprintf('#06x', random_int(0, 0xFFFFFF)),
            ]);
        }
    }
}
