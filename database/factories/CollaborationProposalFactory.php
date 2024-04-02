<?php

namespace Database\Factories;
// use App\Models\Category;
use App\Models\CollaborationProposal;
use Illuminate\Database\Eloquent\Factories\Factory;


class CollaborationProposalFactory extends Factory
{
    
    protected $model = CollaborationProposal::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            // 'category_id' => \App\Models\Category::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'collab_start_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'collab_end_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'collab_type' => $this->faker->randomElement(['Co-Branding', 'Co-Licensing', 'Co-Supply', 'Co-Stand', 'Co-Marketing', 'Co-Event']),
            'duration' => $this->faker->time($format = 'H:i:s', $max = '24:00:00'),
            'compensation' => $this->faker->realText(255) ?? 'No compensation specified',
            'compensation_amount' => $this->faker->randomFloat(2, 0, 1000) ?? 0,
            'cost' => $this->faker->realText(255) ?? 'No cost specified',
            'objectives' => $this->faker->realText(255) ?? 'No objectives specified',
            'ideal_collaborators' => $this->faker->realText(255) ?? 'No ideal collaborators specified',
            'proposal' => $this->faker->realText(255) ?? 'No proposal specified',
            'responsibility' => $this->faker->realText(255) ?? 'No responsibility specified',
            'planning' => $this->faker->realText(255) ?? 'No planning specified',
            'operations_and_sales' => $this->faker->realText(255) ?? 'No operations and sales specified',
            'marketing' => $this->faker->realText(255) ?? 'No marketing specified',
            'economic_agreements' => $this->faker->realText(255) ?? 'No economic agreements specified',
            'terms_and_conditions' => $this->faker->realText(255) ?? 'No terms and conditions specified',
            'observations' => $this->faker->realText(255) ?? 'No observations specified',
            'public_or_private' => $this->faker->boolean,
            'collab_limit' => $this->faker->boolean,
            'limit' => $this->faker->numberBetween($min = 0, $max = 100),
            'ad_start_date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'ad_end_date' => $this->faker->dateTimeBetween('+3 weeks', '+4 weeks'),
            'send_notification' => $this->faker->boolean,
        ];
    }
}
