<?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode_rs' => 'RS-DMS-01',
                'nama_rs' => 'Rumah Sakit Dimas Sejahtera',
                'alamat' => 'Jl. Kenangan Lama No. 12',
                'kota' => 'Jakarta Selatan',
                'provinsi' => 'DKI Jakarta',
                'telepon' => '02177881234',
                'email' => 'info@rsdimassejahtera.com',
                'status' => 'aktif',
                'tipe_rs' => 'B',
            ],
            [
                'kode_rs' => 'RS-DMS-02',
                'nama_rs' => 'Rumah Sakit Dimas Medical Center',
                'alamat' => 'Jl. Pahlawan No. 88',
                'kota' => 'Depok',
                'provinsi' => 'Jawa Barat',
                'telepon' => '02155443322',
                'email' => 'contact@dimasmedcenter.com',
                'status' => 'aktif',
                'tipe_rs' => 'C',
            ],
        ];

        foreach ($data as $rs) {
            RumahSakit::firstOrCreate(
                ['kode_rs' => $rs['kode_rs']],
                $rs
            );
        }
    }
}
