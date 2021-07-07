<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $products = new Product();
       $products->id = 1;
       $products->name= 'Chu Duong';
       $products->phone_number= 0123456;
       $products->email ='chuduong333@gmail.com';
       $products->address = 'Phu Tho';
       $products->manage = 'Duong';
       $products->status_id = 1;
       $products->save();
    }
}
