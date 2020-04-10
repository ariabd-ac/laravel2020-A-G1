<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nama = ['IPA 1','IPA 2','IPA 3','IPS','Matematika Dasar','Matematika Lanjutan','Sejarah','Fisika','Kimia','Seni Budaya','Olahraga','Bahasa Inggris','Bahasa Inggris Lanjutan','Bahsa Indonesia Dasar','Bahasa Indonesia Lanjutan','Agama','PKN','Biologi','Bahasa Daerah'];
        $faker = Faker::create('id_ID');
        for ($i = 0; $i <= 100; $i++) {
            if ($i < 10) {
                $kode = 'M1' . $i;
            } else {
                $kode = 'M1' . $i;
            }
            DB::table('mapel')->insert([
                'kode' => $kode,
                'nama' => $faker->randomElement($array = array ('IPA 1','IPA 2','IPA 3','IPS','Matematika Dasar','Matematika Lanjutan','Sejarah','Fisika','Kimia','Seni Budaya','Olahraga','Bahasa Inggris','Bahasa Inggris Lanjutan','Bahsa Indonesia Dasar','Bahasa Indonesia Lanjutan','Agama','PKN','Biologi','Bahasa Daerah')),
                'teacher_id' => $faker->numberBetween(1,50),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
