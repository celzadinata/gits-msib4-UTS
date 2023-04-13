<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name'         => 'Pakaian',
                'description'  => 'Murah Meriah',
            ],
            [
                'name'         => 'Elektronik',
                'description'  => 'Canggih Sekali',
            ],
            [
                'name'         => 'Mainan',
                'description'  => 'Harga Terjangkau',
            ],
            [
                'name'         => 'Kesehatan',
                'description'  => 'Harga terjangkau',
            ],
            [
                'name'         => 'Aksesoris',
                'description'  => 'Keren',
            ]
        ];

        categories::insert($category);
    }
}
