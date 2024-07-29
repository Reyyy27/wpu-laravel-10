<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gurus')->insert([
            'nama_guru' => 'Ema Kresnawati',
            'nomor_induk' => '20173001',
            'alamat' => 'Jl SoekarnoHatta Km 7',
            'no_telpon' => '+6281234431'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Eka Pras',
            'nomor_induk' => '20173002',
            'alamat' => 'Jl SoekarnoHatta Km 5',
            'no_telpon' => '+628128764421'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Arofah',
            'nomor_induk' => '20173003',
            'alamat' => 'Jl SoekarnoHatta Km 10',
            'no_telpon' => '+62889786442'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Ernawati',
            'nomor_induk' => '20173004',
            'alamat' => 'Jl SoekarnoHatta Km 8',
            'no_telpon' => '+62807359861'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Hairudin',
            'nomor_induk' => '20173005',
            'alamat' => 'Jl SoekarnoHatta Km 7',
            'no_telpon' => '+62884718879'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Fajar Nasrullah',
            'nomor_induk' => '20173006',
            'alamat' => 'Jl SoekarnoHatta Km 6',
            'no_telpon' => '+629816712823'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Dony',
            'nomor_induk' => '20173007',
            'alamat' => 'Jl SoekarnoHatta Km 6',
            'no_telpon' => '+629094478412'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Ardian',
            'nomor_induk' => '20173008',
            'alamat' => 'Jl SoekarnoHatta Km 5',
            'no_telpon' => '+6288274894677'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Supari',
            'nomor_induk' => '20173009',
            'alamat' => 'Jl SoekarnoHatta Km 3',
            'no_telpon' => '+628097097756'
        ]);

        DB::table('gurus')->insert([
            'nama_guru' => 'Karlina Indahsari',
            'nomor_induk' => '20173010',
            'alamat' => 'Jl SoekarnoHatta Km 4',
            'no_telpon' => '+6288762478228'
        ]);
    }
}
