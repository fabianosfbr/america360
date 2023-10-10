<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\LeadSource;
use App\Models\PipelineStage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;


    public function definition(): array
    {
        $leadSorce = LeadSource::inRandomOrder()->first();
        $pipelineStage = PipelineStage::inRandomOrder()->first();
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'description' => $this->faker->text(),
            'lead_source_id' => $leadSorce->id,
            'pipeline_stage_id' => $pipelineStage->id,
        ];
    }
}
