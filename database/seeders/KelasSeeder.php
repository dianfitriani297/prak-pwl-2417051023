<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_kelas' => 'A'],
            ['nama_kelas' => 'B'],
            ['nama_kelas' => 'C'],
            ['nama_kelas' => 'D'],
        ];

        foreach ($data as $item) {
            DB::table('kelas')->insert([
                'nama_kelas' => $item['nama_kelas'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}