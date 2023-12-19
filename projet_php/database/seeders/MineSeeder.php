<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mine;

class MineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mine::create([
            'name'=>'La pepite',
            'longitude'=>12.34698752,
            'latitude'=>24.25913648,
            'phone'=>'0606060606',
            'concession_id'=>1,
        ]);

        Mine::create([
            'name'=>"Mine d'or",
            'longitude'=>-2.81536956,
            'latitude'=>42.16917512,
            'phone'=>'0606060606',
            'concession_id'=>1,
        ]);
        
    }
}
