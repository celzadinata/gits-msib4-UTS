<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'avatar' => 'default',
                'first_name' => 'Rizal',
                'last_name' => 'Jago',
                'username' => 'rizaleka',
                'email' => 'rizal@gmail.com',
                'password' => bcrypt('rizal'),
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Banyuwangi',
                'no_hp' => '082876123',
                'role' => 'penjual',
            ],
            [
                'avatar' => 'default',
                'first_name' => 'Naufal',
                'last_name' => 'Jago',
                'username' => 'Naufal',
                'email' => 'naufal@gmail.com',
                'password' => bcrypt('naufal'),
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Purwoketo',
                'no_hp' => '08254653433',
                'role' => 'penjual',
            ],
            [
                'avatar' => 'default',
                'first_name' => 'Raihan',
                'last_name' => 'Jago',
                'username' => 'Raihan',
                'email' => 'raihan@gmail.com',
                'password' => bcrypt('raihan'),
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Madura',
                'no_hp' => '082456785643',
                'role' => 'pembeli',
            ],
            [
                'avatar' => 'default',
                'first_name' => 'Celza',
                'last_name' => 'Jago',
                'username' => 'Celza',
                'email' => 'celza@gmail.com',
                'password' => bcrypt('celza'),
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jakarta',
                'no_hp' => '082876145632',
                'role' => 'pembeli',
            ],
            [
                'avatar' => 'default',
                'first_name' => 'Afiat',
                'last_name' => 'Jago',
                'username' => 'Afiat',
                'email' => 'afiat@gmail.com',
                'password' => bcrypt('afiat'),
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'NTT',
                'no_hp' => '082876132412',
                'role' => 'pembeli',
            ]
        ];

        User::insert($user);
    }
}
