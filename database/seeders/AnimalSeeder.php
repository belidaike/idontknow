<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animals = [
            [
                'details_id' => '1',
                'species' => 'Dog',
            ],
            [
                'details_id' => '2',
                'species' => 'Cat',
            ],
        ];

        foreach($animals as $animal) {
            Animal::create($animal);
        }
    }
}
