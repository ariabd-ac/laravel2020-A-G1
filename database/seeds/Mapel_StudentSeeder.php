<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class Mapel_StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker  = Faker::create('id_ID');
        
        DB::table('mapel_student')->insert([
            'mapel_id' => $faker->numberBetween(1,25),
            'student_id' => $faker->numberBetween(1,100),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
