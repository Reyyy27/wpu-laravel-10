<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapels')->insert([
            'nama_mapel' => 'Matematika',
            'keterangan' => 'mtk',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Inggris',
            'keterangan' => 'bhs inggris',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'IPA',
            'keterangan' => 'ipa',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'IPS',
            'keterangan' => 'ips',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Indonesia',
            'keterangan' => 'bhs indonesia',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'PKN',
            'keterangan' => 'pkn',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'PJOK',
            'keterangan' => 'pjok',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Sejarah',
            'keterangan' => 'sejarah',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Pendidikan Agama',
            'keterangan' => 'pendidikan agama',
            
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Seni Budaya',
            'keterangan' => 'sbk',
            
        ]);
    }
}
