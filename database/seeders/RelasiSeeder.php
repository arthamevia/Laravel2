<?php

namespace Database\Seeders;
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

        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072'));

        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088'));

        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim' => '1015015078'));
       
        $this->command->info('Mahasiswa telah diisi!');

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
      
        $this->command->info('Data mahasiswa dan wali telah diisi!');

    }
}
