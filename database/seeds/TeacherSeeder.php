<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');


        $status = ['PNS','Honorer'];
        for ($i = 0; $i <= 100; $i++) {
            if ($i < 10) {
                $kodeguru = 'A001' . $i;
            } else {
                $kodeguru = 'A001' . $i;
            }
            DB::table('teachers')->insert([
                'kodeguru' => $kodeguru,
                'nama' => $faker->name,
                'nig' => $faker->numberBetween(02322,200000),
                'phone' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'ttl' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y/m/d'),
                'jk' =>$faker->randomElement($array = array ('P','L')),
                'status' => $faker->randomElement($status),
                'pdf' => 'contoh.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'gambar' => 'avatar.png'
            ]);
        }
    }
}
