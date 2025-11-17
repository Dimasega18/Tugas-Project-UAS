<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'resep_id' => 1,
                'obat_id' => 1,
                'jumlah' => 2,
                'aturan_pakai' => '3x1 sesudah makan',
                'catatan' => 'Jika demam tinggi ulang kontrol',
                'harga_satuan' => 8000,
                'subtotal' => 16000,
            ],
            [
                'resep_id' => 1,
                'obat_id' => 4,
                'jumlah' => 1,
                'aturan_pakai' => '1x1 malam',
                'catatan' => null,
                'harga_satuan' => 9000,
                'subtotal' => 9000,
            ],
            [
                'resep_id' => 1,
                'obat_id' => 5,
                'jumlah' => 1,
                'aturan_pakai' => '1x1 pagi',
                'catatan' => 'Boleh diminum sebelum makan',
                'harga_satuan' => 7000,
                'subtotal' => 7000,
            ],
            [
                'resep_id' => 2,
                'obat_id' => 3,
                'jumlah' => 2,
                'aturan_pakai' => '3x1 sesudah makan',
                'catatan' => 'Habiskan meskipun sudah membaik',
                'harga_satuan' => 15000,
                'subtotal' => 30000,
            ],
            [
                'resep_id' => 2,
                'obat_id' => 6,
                'jumlah' => 1,
                'aturan_pakai' => '3x1 sebelum makan',
                'catatan' => null,
                'harga_satuan' => 6000,
                'subtotal' => 6000,
            ],
            [
                'resep_id' => 2,
                'obat_id' => 11,
                'jumlah' => 1,
                'aturan_pakai' => '2x1 sesudah makan',
                'catatan' => null,
                'harga_satuan' => 10000,
                'subtotal' => 10000,
            ],
            [
                'resep_id' => 3,
                'obat_id' => 8,
                'jumlah' => 1,
                'aturan_pakai' => '1x1 pagi',
                'catatan' => 'Pantau tekanan darah',
                'harga_satuan' => 9000,
                'subtotal' => 9000,
            ],
            [
                'resep_id' => 3,
                'obat_id' => 7,
                'jumlah' => 2,
                'aturan_pakai' => '2x1 sesudah makan',
                'catatan' => 'Jangan lewatkan jadwal minum',
                'harga_satuan' => 8000,
                'subtotal' => 16000,
            ],
            [
                'resep_id' => 3,
                'obat_id' => 14,
                'jumlah' => 1,
                'aturan_pakai' => 'Jika mual',
                'catatan' => null,
                'harga_satuan' => 18000,
                'subtotal' => 18000,
            ],
            [
                'resep_id' => 3,
                'obat_id' => 19,
                'jumlah' => 1,
                'aturan_pakai' => 'Teteskan 3x sehari',
                'catatan' => 'Jangan kena ujung botol ke mata',
                'harga_satuan' => 28000,
                'subtotal' => 28000,
            ],
        ];
        DB::table('resep_details')->insert($data);
    }
}
