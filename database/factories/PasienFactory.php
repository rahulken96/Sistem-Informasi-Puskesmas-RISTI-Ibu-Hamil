<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_ktp' => $this->faker->nik(),
            'nama' => $this->faker->name('female'),
            'nama_suami' => $this->faker->name('male'),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'umur' => $this->faker->numberBetween(17,55),
            'no_hp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->streetAddress(),

        ];
    }
}
