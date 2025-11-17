<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\PoliKlinik;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        $poli = PoliKlinik::pluck('id', 'nama_poli');

        $data = [
            [
                'nama_poli' => 'Poli Umum',
                'kode_dokter' => 'DR-UMUM-001',
                'nama_dokter' => 'Andi Prasetyo',
                'jenis_kelamin' => 'L',
                'spesialis' => 'Umum',
                'telepon' => '081200000001',
                'email' => 'andi.prasetyo@contoh.com',
            ],
            [
                'nama_poli' => 'Poli Gigi',
                'kode_dokter' => 'DR-GIGI-001',
                'nama_dokter' => 'Citra Lestari',
                'jenis_kelamin' => 'P',
                'spesialis' => 'Gigi',
                'telepon' => '081200000002',
                'email' => 'citra.lestari@contoh.com',
            ],
            [
                'nama_poli' => 'Poli Anak',
                'kode_dokter' => 'DR-ANAK-001',
                'nama_dokter' => 'Eko Widodo',
                'jenis_kelamin' => 'L',
                'spesialis' => 'Anak',
                'telepon' => '081200000003',
                'email' => 'eko.widodo@contoh.com',
            ],
            [
                'nama_poli' => 'Poli Kandungan',
                'kode_dokter' => 'DR-KAND-001',
                'nama_dokter' => 'Dewi Kusuma',
                'jenis_kelamin' => 'P',
                'spesialis' => 'Kandungan',
                'telepon' => '081200000004',
                'email' => 'dewi.kusuma@contoh.com',
            ],
            [
                'nama_poli' => 'Poli Saraf',
                'kode_dokter' => 'DR-SARAF-001',
                'nama_dokter' => 'Hendra Wijaya',
                'jenis_kelamin' => 'L',
                'spesialis' => 'Saraf',
                'telepon' => '081200000005',
                'email' => 'hendra.wijaya@contoh.com',
            ],
            [
                'nama_poli' => 'Poli Jantung',
                'kode_dokter' => 'DR-JTG-001',
                'nama_dokter' => 'Gita Savitri',
                'jenis_kelamin' => 'P',
                'spesialis' => 'Jantung',
                'telepon' => '081200000006',
                'email' => 'gita.savitri@contoh.com',
            ],
            [
                'nama_poli' => 'Poli Mata',
                'kode_dokter' => 'DR-MATA-001',
                'nama_dokter' => 'Irma Fauziah',
                'jenis_kelamin' => 'P',
                'spesialis' => 'Mata',
                'telepon' => '081200000007',
                'email' => 'irma.fauziah@contoh.com',
            ],
            [
                'nama_poli' => 'Poli THT',
                'kode_dokter' => 'DR-THT-001',
                'nama_dokter' => 'Joko Hariyanto',
                'jenis_kelamin' => 'L',
                'spesialis' => 'THT',
                'telepon' => '081200000008',
                'email' => 'joko.hariyanto@contoh.com',
            ],
            [
                'nama_poli' => 'Instalasi Gawat Darurat',
                'kode_dokter' => 'DR-IGD-001',
                'nama_dokter' => 'Fajar Nugraha',
                'jenis_kelamin' => 'L',
                'spesialis' => 'Emergensi',
                'telepon' => '081200000009',
                'email' => 'fajar.nugraha@contoh.com',
            ],
        ];

        foreach ($data as $row) {
            if (!isset($poli[$row['nama_poli']])) {
                continue; // Kalau poli belum ada, ya sudahlah
            }

            Dokter::updateOrCreate(
                ['kode_dokter' => $row['kode_dokter']],
                [
                    'poliklinik_id' => $poli[$row['nama_poli']],
                    'nama_dokter' => $row['nama_dokter'],
                    'jenis_kelamin' => $row['jenis_kelamin'],
                    'spesialis' => $row['spesialis'],
                    'telepon' => $row['telepon'],
                    'email' => $row['email'],
                    'status' => 'aktif'
                ]
            );
        }
    }
}
