<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
                'name' => 'Mas Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Mas Keuangan',
                'email' => 'keuangan@gmail.com',
                'role' => 'keuangan',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Mas Markering',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('12345')
            ],
            ];

            foreach($userData as $key => $val){
                User::create($val);
            }
    }
}
