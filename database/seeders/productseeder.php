<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product as pd ;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pd::create([
            'category_id'=> 2,
            'name' => 'Product 2',
            'price' =>200
        ]);
    }
}
