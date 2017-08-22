<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Utomo Hendra Saputra',
            'email' => 'utomo.hendra.saputra@gmail.com',
            'institution' => 'Universitas Bakrie',
            'password' => bcrypt('secret'),
        ]);
    }
}
