<?php

namespace Database\Seeders;

use App\Models\PipelineStage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PipelineStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stages = [
            'Lead',
            'Contact Made',
            'Proposal Made',
            'Proposal Rejected',
            'Customer',
        ];

        foreach ($stages as $stage) {
            PipelineStage::create(['name' => $stage]);
        }
    }
}
