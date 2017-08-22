<?php

use Illuminate\Database\Seeder;

class AlternativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatives')->insert([
            'name' => 'Manajemen',
            'C1' => 0.214,
            'C2' => 0.1024,
            'C3' => 0.0138,
            'C4' => 0.1539,
            'C5' => 0.2264,
            'C6' => 0.2264,
            'C7' => 0.1024,
            'C8' => 0.0214,
            'C9' => 0.0660,
            'C10' => 0.0660
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Akuntansi',
            'C1' => 0.0466,
            'C2' => 0.2461,
            'C3' => 0.0160,
            'C4' => 0.0450,
            'C5' => 0.2449,
            'C6' => 0.0466,
            'C7' => 0.0156,
            'C8' => 0.2461,
            'C9' => 0.0466,
            'C10' => 0.0466
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Ilmu Komunikasi',
            'C1' => 0.0916,
            'C2' => 0.0134,
            'C3' => 0.0317,
            'C4' => 0.0916,
            'C5' => 0.0916,
            'C6' => 0.0916,
            'C7' => 0.0446,
            'C8' => 0.0232,
            'C9' => 0.2604,
            'C10' => 0.2604
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Ilmu Politik',
            'C1' => 0.0288,
            'C2' => 0.0621,
            'C3' => 0.0133,
            'C4' => 0.1926,
            'C5' => 0.1227,
            'C6' => 0.2563,
            'C7' =>  0.0155,
            'C8' => 0.0612,
            'C9' => 0.1258,
            'C10' => 0.1217
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Informatika',
            'C1' => 0.0193,
            'C2' => 0.2469,
            'C3' => 0.1215,
            'C4' => 0.0193,
            'C5' =>  0.1215,
            'C6' => 0.0646,
            'C7' =>  0.1215,
            'C8' => 0.2469,
            'C9' => 0.0193,
            'C10' => 0.0193
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Sistem Informasi',
            'C1' => 0.0178,
            'C2' => 0.1532,
            'C3' => 0.0178,
            'C4' => 0.0421,
            'C5' =>  0.1532,
            'C6' => 0.1532,
            'C7' =>  0.0974,
            'C8' => 0.2350,
            'C9' => 0.0652,
            'C10' => 0.0652
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Tehnik Industri',
            'C1' => 0.0256,
            'C2' => 0.1971,
            'C3' => 0.1234,
            'C4' => 0.0142,
            'C5' =>  0.1212,
            'C6' => 0.0189,
            'C7' => 0.1971,
            'C8' => 0.2057,
            'C9' => 0.0484,
            'C10' => 0.0484
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Teknologi Pangan',
            'C1' => 0.0456,
            'C2' => 0.0197,
            'C3' => 0.2682,
            'C4' => 0.0285,
            'C5' => 0.0395,
            'C6' => 0.0961,
            'C7' => 0.0961,
            'C8' => 0.0353,
            'C9' => 0.2237,
            'C10' => 0.1473
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Tehnik Sipil',
            'C1' => 0.0502,
            'C2' => 0.2587,
            'C3' => 0.1890,
            'C4' => 0.0145,
            'C5' => 0.0722,
            'C6' => 0.0250,
            'C7' => 0.2587,
            'C8' => 0.0884,
            'C9' => 0.0183,
            'C10' => 0.0250
        ]);
        DB::table('alternatives')->insert([
            'name' => 'Tehnik Lingkungan',
            'C1' => 0.0296,
            'C2' => 0.0473,
            'C3' => 0.3008,
            'C4' => 0.0155,
            'C5' => 0.0580,
            'C6' => 0.0205,
            'C7' => 0.0797,
            'C8' => 0.0391,
            'C9' => 0.2016,
            'C10' => 0.2080
        ]);
    }
}
