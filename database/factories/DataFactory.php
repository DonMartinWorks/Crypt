<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->name();
        $company = $this->faker->unique()->company();
        $codeSimple = Str::random(12);
        $codeUpper = Str::upper($codeSimple);

        $encrypt = Crypt::encryptString($codeUpper);

        return [
            'name' => $name,
            'company' => $company,
            'code' => $encrypt,
        ];
    }
}
