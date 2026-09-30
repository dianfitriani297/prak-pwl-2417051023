<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = ['A', 'B', 'C', 'D'];

        foreach ($classes as $kelas) {
            Kelas::create([
                'nama_kelas' => $kelas
            ]);
        }
    }
}