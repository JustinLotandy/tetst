<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\barang;

class barangSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        barang::query()->delete();
        $barang = new barang;
        $barang->barang_id=1;
        $barang->kategori_id=1;
        $barang->nama_barang= "Susu Cokelat";
        $barang->daftar_akun=0;
        $barang->harga_beli=3000;
        $barang->pajak_beli=300;
        $barang->harga_jual=5000;
        $barang->pajak_jual=500;
        $barang->stok=1000;
        $barang->save();
    }
}
