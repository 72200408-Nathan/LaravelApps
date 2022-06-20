<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder72200408 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 10; $i++)
       {
        DB::table('mahasiswa72200408')->insert([
            'nim' => $faker->nik(),
            'nama' => $faker->name(),
            'gender' => $faker->gender(),
            'jurusan' => $faker->company(),
            'bidang minat' => $faker->jobTitle(),
        ]);
        }
    } 
}
