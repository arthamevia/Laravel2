<?php

namespace Database\Seeders;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Wali;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        DB::table('dosens')->delete();
        $dosen = Dosen::create(array(
            'nama' => 'Yulianto',
            'nipd' => '1234567890'));
        
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072',
            'id_dosen' => $dosen->id));

        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088',
            'id_dosen' => $dosen->id));

        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim' => '1015015078',
            'id_dosen' => $dosen->id));

        Wali::create(array(
            'nama' => 'Achmad S',
            'id_mahasiswa' => $novay->id,
        ));

        Wali::create(array(
            'nama' => 'Entahlah',
            'id_mahasiswa' => $dije->id,
        ));

        Wali::create(array(
            'nama' => 'Arianto',
            'id_mahasiswa' => $ayu->id,
        ));

    }
}
