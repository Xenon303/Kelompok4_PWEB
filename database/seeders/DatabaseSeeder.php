<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProdukTableSeeder::class,
            // Tambahkan seeder lainnya jika ada
        ]);
    }
}
