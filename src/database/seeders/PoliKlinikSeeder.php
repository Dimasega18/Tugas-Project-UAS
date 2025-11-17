<?php

namespace Database\Seeders;

use App\Models\PoliKlinik;
use Illuminate\Database\Seeder;

class PoliKlinikSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // RS ID 1
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-UMUM-1',
                'nama_poli' => 'Poli Umum',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-GIGI-1',
                'nama_poli' => 'Poli Gigi',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-ANAK-1',
                'nama_poli' => 'Poli Anak',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-KANDUNGAN-1',
                'nama_poli' => 'Poli Kandungan',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-SARAF-1',
                'nama_poli' => 'Poli Saraf',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-JANTUNG-1',
                'nama_poli' => 'Poli Jantung',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-MATA-1',
                'nama_poli' => 'Poli Mata',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-THT-1',
                'nama_poli' => 'Poli THT',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI-IGD-1',
                'nama_poli' => 'Instalasi Gawat Darurat',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-UMUM-2',
                'nama_poli' => 'Poli Umum',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-GIGI-2',
                'nama_poli' => 'Poli Gigi',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-ANAK-2',
                'nama_poli' => 'Poli Anak',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-KANDUNGAN-2',
                'nama_poli' => 'Poli Kandungan',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-SARAF-2',
                'nama_poli' => 'Poli Saraf',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-JANTUNG-2',
                'nama_poli' => 'Poli Jantung',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-MATA-2',
                'nama_poli' => 'Poli Mata',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-THT-2',
                'nama_poli' => 'Poli THT',
                'status' => 'aktif',
            ],
            [
                'rumah_sakit_id' => 2,
                'kode_poli' => 'POLI-IGD-2',
                'nama_poli' => 'Instalasi Gawat Darurat',
                'status' => 'aktif',
            ],
        ];

        PoliKlinik::insert($data);
    }
}
