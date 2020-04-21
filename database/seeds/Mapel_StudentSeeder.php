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
        for ($i = 0; $i <= 100; $i++) {
            if ($i < 10) {
                $mapel_id = '1' . $i;
            } else {
                $mapel_id = '1' . $i;
            }
        
        DB::table('mapel_student')->insert([
            'mapel_id' => $faker->numberBetween(1,100),
            'student_id' => $faker->numberBetween(1,100),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        }
    }
}
