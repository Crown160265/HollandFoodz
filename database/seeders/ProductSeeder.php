<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'KANEELHOMPEN',
            'price' => 4.99,
            'type' => 'candy',
            'category' => 'CINNAMON CHUNKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'PDROPHOMEEN',
            'price' => 8.95,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'OOSTERBOTERWAFELT',
            'price' => 7.55,
            'type' => 'candy',
            'category' => 'CINNAMON CHUNKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'SLOLLYHARTVORMIG',
            'price' => 6.25,
            'type' => 'candy',
            'category' => 'CINNAMON STICKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'SROLLERZZZLOLLY',
            'price' => 5.5,
            'type' => 'candy',
            'category' => 'CINNAMON STICKS',
            'temp' => 'HOT',
        ]);
        Product::create([
            'name' => 'PKERSENSTOKJES',
            'price' => 6.9,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'PKANEELSTOKJES',
            'price' => 7.55,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'KANEELSTOKIES',
            'price' => 5.68,
            'type' => 'candy',
            'category' => 'CINNAMON CHUNKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'VERPAKTKANEEL',
            'price' => 6.89,
            'type' => 'candy',
            'category' => 'CINNAMON CHUNKS',
            'temp' => 'HOT',
        ]);
        Product::create([
            'name' => 'OOSTERDROP',
            'price' => 4.35,
            'type' => 'candy',
            'category' => 'CINNAMON CHUNKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'PKANEELDROP',
            'price' => 7.65,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'SZUURSTOK',
            'price' => 5.2,
            'type' => 'candy',
            'category' => 'CINNAMON STICKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'PKANEELSILOZO',
            'price' => 9.5,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'PKANEELSNOEP',
            'price' => 5.8,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => 'HOT',
        ]);
        Product::create([
            'name' => 'OOSTERKANEEL',
            'price' => 6.3,
            'type' => 'candy',
            'category' => 'CINNAMON CHUNKS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'PDROPSTOKJES',
            'price' => 7.2,
            'type' => 'candy',
            'category' => 'CINNAMON PILLOWS',
            'temp' => '',
        ]);
        Product::create([
            'name' => 'SSPIRAALLOLLY',
            'price' => 6.1,
            'type' => 'candy',
            'category' => 'CINNAMON STICKS',
            'temp' => '',
        ]);
    }
}
