<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
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

        $jurusan = ['IPA','IPS','BAHASA'];
        for ($i = 0; $i <= 100; $i++) {
            if ($i < 10) {
                $kelas = '10' . $i;
            } else {
                $kelas = '10' . $i;
            }
            DB::table('students')->insert([
                'nama' => $faker->name,
                'nis' => $faker->numberBetween(02322,200000),
                'ttl' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y/m/d'),
                'alamat' => $faker->address,
                'jk' =>$faker->randomElement($array = array ('P','L')),
                'phone' => $faker->phoneNumber,
                'kelas' => $kelas,
                'jurusan' => $faker->randomElement($jurusan),
                'pdf' => 'contoh.pdf',
                'gambar' => 'avatar.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
