<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for($i=0; $i<=10; $i++) {
            DB::table('products')->insert([
                 
                'title'=>$faker->title,  
                'image'=>$faker->imageUrl(),
              
            
      
         ]);
    }
}
}