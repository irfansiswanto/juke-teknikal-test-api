<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = (array) @json_decode(file_get_contents(storage_path("app/public/cities.json")), true);
        
        foreach ($json as $key => $value) {
            City::create($value);
        }
    }
}
