<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
           'name' => 'Alsace'
        ]);

        Region::create([
            'name' => 'Picardie'
         ]);

         Region::create([
            'name' => 'PACA'
         ]);
        //
    }
}
