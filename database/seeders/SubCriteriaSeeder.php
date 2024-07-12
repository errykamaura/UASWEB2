<?php

namespace Database\Seeders;

use App\Models\SubCriteria;
use Illuminate\Database\Seeder;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCriteria::create([
            'code' => 'KS001',
            'name' => 'Lantai',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
    }
}
