<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\JadwalPraktek;

class JadwalPraktekSeeder extends Seeder
{
    public function run()
    {
        $hariList = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];

        $jamPraktek = [
            ['mulai' => '08:00', 'selesai' => '11:00'],
            ['mulai' => '13:00', 'selesai' => '16:00'],
        ];

        $dokters = Dokter::all();

        foreach ($dokters as $dokter) {
            $hariDokter = array_slice($hariList, 0, 3);

            foreach ($hariDokter as $index => $hari) {
                $jam = $jamPraktek[$index % count($jamPraktek)];

                JadwalPraktek::create([
                    'dokter_id'   => $dokter->id,
                    'poli_id'     => $dokter->poliklinik_id,
                    'hari'        => $hari,
                    'jam_mulai'   => $jam['mulai'],
                    'jam_selesai' => $jam['selesai'],
                    'status'      => 'aktif',
                    'keterangan'  => $index == 1 ? 'Jadwal tetap' : null,
                ]);
            }
        }
    }
}
