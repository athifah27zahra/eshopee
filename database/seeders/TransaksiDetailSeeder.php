<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = Transaksi::factory(10)->create();
        $barangs = Barang::factory(10)->create();

        foreach ($transaksis as $transaksi){
            TransaksiDetail::factory(10)->create(['transaksi_id' => $transaksi->id]);
        }

        foreach ($barangs as $barang){
            TransaksiDetail::factory(10)->create(['barang_id' => $barang->id]);
        }
    }
}
