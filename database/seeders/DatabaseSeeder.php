<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $data = [
            [
                'customerName' => 'Ngô bá Anh',
                'username' => 'gunners99',
                'password' => bcrypt('123456'),
                'phoneNumber' => '0941716997',
                'email' => 'ngobaanh280499@gmail.com',
                'dateOfbirth' => '1999-02-12',
                'address' => 'Yên Phong'
            ],
            [
                'customerName' => 'Ngô bá Anh',
                'username' => 'ngobaanh',
                'password' => bcrypt('123456'),
                'phoneNumber' => '0941716997',
                'email' => 'ngobaanh280499@gmail.com',
                'dateOfbirth' => '1999-02-12',
                'address' => 'Yên Phong'
            ],
            [
                'customerName' => 'Ngô bá Anh',
                'username' => 'gunners280499',
                'password' => bcrypt('123456'),
                'phoneNumber' => '0941716997',
                'email' => 'ngobaanh280499@gmail.com',
                'dateOfbirth' => '1999-02-12',
                'address' => 'Yên Phong'
            ],
        ];
        DB::table('customers')->insert($data);
    }
}
