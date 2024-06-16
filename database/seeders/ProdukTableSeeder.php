<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            [
                'nama_obat' => 'Paracetamol',
                'kategori_obat' => 'Analgesik',
                'stok' => 100,
                'masa_kadaluarsa' => '2025-12-31',
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'kategori_obat' => 'Antibiotik',
                'stok' => 50,
                'masa_kadaluarsa' => '2023-06-30',
            ],
            [
                'nama_obat' => 'Cetirizine',
                'kategori_obat' => 'Antihistamin',
                'stok' => 75,
                'masa_kadaluarsa' => '2024-03-15',
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'kategori_obat' => 'Analgesik',
                'stok' => 200,
                'masa_kadaluarsa' => '2025-11-30',
            ],
            [
                'nama_obat' => 'Metformin',
                'kategori_obat' => 'Antidiabetik',
                'stok' => 150,
                'masa_kadaluarsa' => '2024-08-15',
            ],
            [
                'nama_obat' => 'Ciprofloxacin',
                'kategori_obat' => 'Antibiotik',
                'stok' => 120,
                'masa_kadaluarsa' => '2023-09-20',
            ],
            [
                'nama_obat' => 'Loratadine',
                'kategori_obat' => 'Antihistamin',
                'stok' => 130,
                'masa_kadaluarsa' => '2024-04-25',
            ],
            [
                'nama_obat' => 'Omeprazole',
                'kategori_obat' => 'Antasida',
                'stok' => 180,
                'masa_kadaluarsa' => '2023-12-01',
            ],
            [
                'nama_obat' => 'Simvastatin',
                'kategori_obat' => 'Antihiperlipidemik',
                'stok' => 90,
                'masa_kadaluarsa' => '2025-05-10',
            ],
            [
                'nama_obat' => 'Paroxetine',
                'kategori_obat' => 'Antidepresan',
                'stok' => 110,
                'masa_kadaluarsa' => '2024-02-14',
            ],
            [
                'nama_obat' => 'Ranitidine',
                'kategori_obat' => 'Antasida',
                'stok' => 85,
                'masa_kadaluarsa' => '2023-11-15',
            ],
            [
                'nama_obat' => 'Atenolol',
                'kategori_obat' => 'Antihipertensi',
                'stok' => 140,
                'masa_kadaluarsa' => '2024-07-21',
            ],
            [
                'nama_obat' => 'Clopidogrel',
                'kategori_obat' => 'Antikoagulan',
                'stok' => 160,
                'masa_kadaluarsa' => '2025-10-30',
            ],
            [
                'nama_obat' => 'Levothyroxine',
                'kategori_obat' => 'Hormon Tiroid',
                'stok' => 100,
                'masa_kadaluarsa' => '2025-06-18',
            ],
            [
                'nama_obat' => 'Warfarin',
                'kategori_obat' => 'Antikoagulan',
                'stok' => 75,
                'masa_kadaluarsa' => '2023-09-29',
            ],
            [
                'nama_obat' => 'Hydrochlorothiazide',
                'kategori_obat' => 'Diuretik',
                'stok' => 95,
                'masa_kadaluarsa' => '2024-03-07',
            ],
            [
                'nama_obat' => 'Spironolactone',
                'kategori_obat' => 'Diuretik',
                'stok' => 70,
                'masa_kadaluarsa' => '2023-12-19',
            ],
            [
                'nama_obat' => 'Metoprolol',
                'kategori_obat' => 'Antihipertensi',
                'stok' => 125,
                'masa_kadaluarsa' => '2024-05-16',
            ],
            [
                'nama_obat' => 'Losartan',
                'kategori_obat' => 'Antihipertensi',
                'stok' => 160,
                'masa_kadaluarsa' => '2024-09-05',
            ],
            [
                'nama_obat' => 'Furosemide',
                'kategori_obat' => 'Diuretik',
                'stok' => 150,
                'masa_kadaluarsa' => '2023-08-11',
            ],
            [
                'nama_obat' => 'Amlodipine',
                'kategori_obat' => 'Antihipertensi',
                'stok' => 110,
                'masa_kadaluarsa' => '2025-04-24',
            ],
            [
                'nama_obat' => 'Sertraline',
                'kategori_obat' => 'Antidepresan',
                'stok' => 100,
                'masa_kadaluarsa' => '2025-01-30',
            ],
            [
                'nama_obat' => 'Esomeprazole',
                'kategori_obat' => 'Antasida',
                'stok' => 135,
                'masa_kadaluarsa' => '2024-12-05',
            ],
            // Tambahkan data obat lainnya jika diperlukan
        ]);
    }
}
