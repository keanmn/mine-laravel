<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concession;

class ConcessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concession::create([
            'name'=>'La mine en or',
            'siret'=>'12345678900001',
        ]);

        Concession::create([
            'name'=>'La mine en cuivre',
            'siret'=>'98510236485912',
        ]);

        Concession::create([
            'name'=>'La mine en argent',
            'siret'=>'12345678900001',
        ]);

        Concession::create([
            'name'=>'La mine en bronze',
            'siret'=>'98510236485912',
        ]);
    }
}
