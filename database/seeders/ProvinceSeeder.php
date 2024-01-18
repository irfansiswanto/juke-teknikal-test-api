<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = (array) @json_decode(file_get_contents(storage_path("app/public/provinces.json")), true);
        
        foreach ($json as $key => $value) {
            Province::create($value);
        }
    }
}
