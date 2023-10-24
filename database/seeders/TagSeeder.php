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
                'color' => $this->randomHexColor(),
            ]);
        }
    }

    private function randomHexColor() {
        $letters = '0123456789ABCDEF';
        $color = '#';
        for ($i = 0; $i < 6; $i++) {
            $color .= $letters[rand(0, 15)];
        }
        return $color;
    }
}
