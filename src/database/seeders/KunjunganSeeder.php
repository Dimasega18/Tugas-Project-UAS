<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\JadwalPraktek;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        $kunjunganList = [
            ['pasien' => 1, 'dokter' => 1, 'waktu' => '2025-01-10 08:30:00', 'keluhan' => 'Demam dan badan lemas', 'status' => 'menunggu'],
            ['pasien' => 2, 'dokter' => 2, 'waktu' => '2025-01-10 09:00:00', 'keluhan' => 'Batuk kering', 'status' => 'menunggu'],
            ['pasien' => 3, 'dokter' => 1, 'waktu' => '2025-01-10 10:15:00', 'keluhan' => 'Sakit perut setelah makan', 'status' => 'diperiksa'],
            ['pasien' => 4, 'dokter' => 3, 'waktu' => '2025-01-10 11:00:00', 'keluhan' => 'Pusing berat', 'status' => 'selesai', 'diagnosa' => 'Vertigo ringan'],
            ['pasien' => 5, 'dokter' => 1, 'waktu' => '2025-01-11 08:45:00', 'keluhan' => 'Mual dan muntah', 'status' => 'selesai', 'diagnosa' => 'Gastritis'],
            ['pasien' => 1, 'dokter' => 2, 'waktu' => '2025-01-11 10:10:00', 'keluhan' => 'Nyeri dada ringan', 'status' => 'batal'],
            ['pasien' => 2, 'dokter' => 1, 'waktu' => '2025-01-12 09:20:00', 'keluhan' => 'Gatal pada kulit', 'status' => 'selesai', 'diagnosa' => 'Alergi ringan'],
            ['pasien' => 3, 'dokter' => 3, 'waktu' => '2025-01-12 13:00:00', 'keluhan' => 'Nyeri sendi', 'status' => 'diperiksa'],
            ['pasien' => 4, 'dokter' => 2, 'waktu' => '2025-01-13 08:50:00', 'keluhan' => 'Batuk dan pilek', 'status' => 'selesai', 'diagnosa' => 'ISPA ringan'],
            ['pasien' => 5, 'dokter' => 3, 'waktu' => '2025-01-13 14:30:00', 'keluhan' => 'Sesak napas', 'status' => 'batal'],
        ];

        $insertData = [];

        foreach ($kunjunganList as $item) {
            $dokter = Dokter::find($item['dokter']);

            if (!$dokter) {
                continue;
            }

            $hariMap = [
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu',
                'Sunday' => 'Minggu',
            ];

            $hariEnglish = date('l', strtotime($item['waktu']));
            $hariIndo = $hariMap[$hariEnglish] ?? null;

            $jadwal = JadwalPraktek::where('dokter_id', $dokter->id)
                ->where('hari', $hariIndo)
                ->first();

            $insertData[] = [
                'pasien_id' => $item['pasien'],
                'dokter_id' => $dokter->id,
                'poli_id' => $dokter->poliklinik_id,
                'jadwal_praktek_id' => $jadwal?->id,
                'waktu_kunjungan' => $item['waktu'],
                'status' => $item['status'],
                'keluhan' => $item['keluhan'],
                'diagnosa' => $item['diagnosa'] ?? null,
            ];
        }

        DB::table('kunjungans')->insert($insertData);
    }
}
