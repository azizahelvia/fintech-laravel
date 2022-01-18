<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create([
            "nama_barang"   => "pensil",
            "harga_barang"  => 2000
        ]);

        Inventory::create([
            "nama_barang"   => "pulpen",
            "harga_barang"  => 3500
        ]);

        Inventory::create([
            "nama_barang"   => "penggaris 30cm",
            "harga_barang"  => 2500
        ]);
    }
}
