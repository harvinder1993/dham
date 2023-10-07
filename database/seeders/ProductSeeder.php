<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'user_id' => 1,
                'organization_id' => 1,
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 99.99,
                'sku' => 'SKU001',
                'quantity_in_stock' => 100,
                'manufacturer' => 'Manufacturer A',
                'manufacture_date' => '2022-01-15',
                'is_published' => true,
            ],
            [
                'user_id' => 1,
                'organization_id' => 1,
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 79.99,
                'sku' => 'SKU002',
                'quantity_in_stock' => 50,
                'manufacturer' => 'Manufacturer B',
                'manufacture_date' => '2022-02-20',
                'is_published' => true,
            ],
            [
                'user_id' => 1,
                'organization_id' => 2,
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 129.99,
                'sku' => 'SKU003',
                'quantity_in_stock' => 75,
                'manufacturer' => 'Manufacturer C',
                'manufacture_date' => '2022-03-10',
                'is_published' => true,
            ],
            [
                'user_id' => 1,
                'organization_id' => 2,
                'name' => 'Product 4',
                'description' => 'Description for Product 4',
                'price' => 149.99,
                'sku' => 'SKU004',
                'quantity_in_stock' => 25,
                'manufacturer' => 'Manufacturer D',
                'manufacture_date' => '2022-04-05',
                'is_published' => true,
            ],
            [
                'user_id' => 1,
                'organization_id' => 1,
                'name' => 'Product 5',
                'description' => 'Description for Product 5',
                'price' => 69.99,
                'sku' => 'SKU005',
                'quantity_in_stock' => 60,
                'manufacturer' => 'Manufacturer E',
                'manufacture_date' => '2022-05-15',
                'is_published' => true,
            ],
        ];

        // Insert the data into the 'products' table
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}