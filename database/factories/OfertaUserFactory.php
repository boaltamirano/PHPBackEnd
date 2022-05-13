<?php

namespace Database\Factories;

use App\Models\OfertaUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OfertaUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oferta_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
