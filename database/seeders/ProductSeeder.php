<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        	'name' => 'Espresso Single',
            'harga' => '18000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Espresso Double',
            'harga' => '25000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Cappucino',
            'harga' => '22000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Cafe Late',
            'harga' => '24000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Machiato',
            'harga' => '22000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Piccollo',
            'harga' => '20000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Flat White',
            'harga' => '22000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Mocha',
            'harga' => '23000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Tiramisu',
            'harga' => '23000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Affogato Single',
            'harga' => '23000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Affogato Double',
            'harga' => '28000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Affogato Orgasm',
            'harga' => '33000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Americano',
            'harga' => '20000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Espresso Susu',
            'harga' => '25000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Ice Coffee',
            'harga' => '25000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Romano Coffee',
            'harga' => '28000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Strawberry Coffe',
            'harga' => '28000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Sanger Coffe',
            'harga' => '25000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Caramel Machiato',
            'harga' => '26000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Aren Coffee',
            'harga' => '23000',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Red Velvet',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Green Matcha',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Charcoal',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Taro',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Caramel',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Thai Tea',
            'harga' => '25000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Lemon Tea',
            'harga' => '15000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Lychee Tea',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Sweet Tea',
            'harga' => '8000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Chocolate',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Milo Dyno',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Vanilla',
            'harga' => '22000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Badak',
            'harga' => '10000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Mineral Water',
            'harga' => '5000',
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Extra Syrup',
            'harga' => '8000',
            'jenis_id' => 3,
        ]);

        DB::table('products')->insert([
        	'name' => 'Extra Shoot',
            'harga' => '8000',
            'jenis_id' => 3,
        ]);

        DB::table('products')->insert([
        	'name' => 'Extra Float',
            'harga' => '8000',
            'jenis_id' => 3,
        ]);

        DB::table('products')->insert([
        	'name' => 'Nasi Goreng',
            'harga' => '25000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Rebus Normal',
            'harga' => '18000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Rebus Abnormal',
            'harga' => '20000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Goreng Normal',
            'harga' => '18000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Goreng Oriental',
            'harga' => '20000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Chicken Teriyaki',
            'harga' => '28000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Bakso',
            'harga' => '23000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Siomay',
            'harga' => '25000',
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Pangsit Goreng',
            'harga' => '24000',
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Ayam',
            'harga' => '20000',
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Kepitinng',
            'harga' => '22000',
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Rumput Laut',
            'harga' => '23000',
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Udang',
            'harga' => '23000',
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Fettucini',
            'harga' => '27000',
            'jenis_id' => 6,
        ]);

        DB::table('products')->insert([
        	'name' => 'Spaghetti',
            'harga' => '27000',
            'jenis_id' => 6,
        ]);

        DB::table('products')->insert([
        	'name' => 'Coklat',
            'harga' => '17000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Coke',
            'harga' => '20000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Strawberry',
            'harga' => '17000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Kacang',
            'harga' => '17000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Keju',
            'harga' => '18000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Srikaya',
            'harga' => '18000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Nanas',
            'harga' => '17000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Milo',
            'harga' => '22000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Rovamaltine',
            'harga' => '25000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Pisang Coklat',
            'harga' => '22000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Red Velvet',
            'harga' => '22000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Cappucion',
            'harga' => '22000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Hazelnut',
            'harga' => '22000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Green Matcha',
            'harga' => '22000',
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Nutella',
            'harga' => '25000',
            'jenis_id' => 7,
        ]);
    }
}
