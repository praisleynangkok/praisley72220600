<?php

use Illuminate\Database\Seeder;

class donibobi_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i =  1; $i<=100; $i++){
            DB::table('donibobi')->insert([
                'id'=>$faker->sentence(),
                'item'=>$faker->word(),
                'jumlah'=>$faker->word(),
            ]);
        }
        //
    }
}
