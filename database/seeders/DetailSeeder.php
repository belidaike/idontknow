<?php

namespace Database\Seeders;

use App\Models\Details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'animal_id' => '1',
                'name' => 'Browny',
                'age' => '2',
                'address' => 'Bohol, Tubigon'
            ],
            [
                'animal_id' => '2',
                'name' => 'Katy',
                'age' => '3',
                'address' => 'Bohol, Tubigon'
            ],
        ];

        foreach($details as $detail) {
            Details::create($detail);
        }
    }
}
