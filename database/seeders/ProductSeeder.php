<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Infinix hot',
                'price' => '100000',
                'description' => 'Best cellphone ever in pakistan',
                'category' => 'Mobile',
                'gallery' => 'https://images.app.goo.gl/aNWsr5uiJCj89mv67'
            ],

            [
                'name' => 'Oppo f17',
                'price' => '150000',
                'description' => 'Best cellphone ever in pakistan',
                'category' => 'Mobile',
                'gallery' => 'https://images.app.goo.gl/uyQg9pJ5nm2gQzxQ7'
            ],

            [
                'name' => 'Tv Samsung',
                'price' => '20000',
                'description' => 'Best TV ever in pakistan',
                'category' => 'Television',
                'gallery' => 'https://images.app.goo.gl/GNKbpTD4vEviMLxL6'
            ],
            [
                'name' => 'Ac Gree',
                'price' => '80000',
                'description' => 'Best Ac ever in pakistan',
                'category' => 'Air condition',
                'gallery' => 'https://images.app.goo.gl/Hi7TfsXCnd8ppZai9'
            ]





        ]);
    }
}
