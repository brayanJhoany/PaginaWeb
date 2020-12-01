<?php

namespace Database\Factories;

use App\Models\Publicacion;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PublicacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publicacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => User::all()->random()->id,

        ];
    }
}
