<?php

namespace Database\Seeders;

use App\Models\Rombel;
use App\Models\Datasiswa;
use App\Models\Lembaga;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lembaga::create([
            'npsn' => '991346585',
            'nsm' => '123123123123',
            'nm_lembaga' => 'MTs Sejahtera',
            'alamat' => 'Jl. Kehidupan dan Keberkahan',
            'status' => 'Swasta',
            'thn_pljrn' => '2021-2022',
            'nm_kepala' => 'CAK YASIN',
            'nip_kepala' => '-',
        ]);
        Datasiswa::create([
            'nis' => '131235090077190001',
            'nisn' => '0029581367',
            'nama' => 'ABELLIYA FEBRIYANTI',
            'jk' => 'P',
            'tmp_lahir' => 'JEMBER',
            'tgl_lahir' => '2004-09-23',
            'nik' => '6402106309040007',
            'agama' => 'Islam',
            'nm_ayh' => 'SISWANTO',
            'nm_ibu' => 'LILIK HASANAH',
            'kelas_aktf' => '9A',
            'status' => 'RESIDU',
            'skl_asal' => 'SMPS Plus Al Amien',
            'editor' => 'Mukhammad Yasin',
            'created_at' => '2022-05-05 03:29:50',
            'updated_at' => '2022-05-05 03:29:50',
        ]);

        Datasiswa::create([
            'nis' => '131235090077190002',
            'nisn' => '0040957178',
            'nama' => 'ACHMAD IRWANTO',
            'jk' => 'L',
            'tmp_lahir' => 'JEMBER',
            'tgl_lahir' => '2004-04-18',
            'nik' => '3509111804040004',
            'agama' => 'Islam',
            'nm_ayh' => 'SUKUR',
            'nm_ibu' => 'SUGIYARTI',
            'kelas_aktf' => '9A',
            'status' => 'RESIDU',
            'skl_asal' => 'SMPS Plus Al Amien',
            'editor' => 'Mukhammad Yasin',
            'created_at' => '2022-05-05 03:29:50',
            'updated_at' => '2022-05-05 03:29:50',
        ]);

        Datasiswa::create([
            'nis' => '131235090077190003',
            'nisn' => '0036499495',
            'nama' => 'ACHMAT RAFI ANWAR ALFARIS',
            'jk' => 'L',
            'tmp_lahir' => 'JEMBER',
            'tgl_lahir' => '2003-08-19',
            'nik' => '3509111908030001',
            'agama' => 'Islam',
            'nm_ayh' => 'M.ANSORI',
            'nm_ibu' => 'SUSIANAH',
            'kelas_aktf' => '9A',
            'status' => 'AKTIF',
            'skl_asal' => 'MTs Al Amien',
            'editor' => 'Mukhammad Yasin',
            'created_at' => '2022-05-05 03:29:50',
            'updated_at' => '2022-05-05 03:29:50',
        ]);
        Datasiswa::create([
            'nis' => '131235090077190004',
            'nisn' => '0045554629',
            'nama' => 'ADI PRASETIYO',
            'jk' => 'L',
            'tmp_lahir' => 'JEMBER',
            'tgl_lahir' => '2004-01-19',
            'nik' => '3509121901040003',
            'agama' => 'Islam',
            'nm_ayh' => 'MOH KOMARI',
            'nm_ibu' => 'SITI AROHMAH',
            'kelas_aktf' => '9A',
            'status' => 'NONAKTIF',
            'skl_asal' => 'MTs. SA BUSTANUT THALABAH',
            'editor' => 'Mukhammad Yasin',
            'created_at' => '2022-05-05 03:29:50',
            'updated_at' => '2022-05-05 03:29:50',
        ]);
        Rombel::create([
            'nm_kelas' => '9A',
            'tingkat' => '9',
            'wl_kelas' => 'ADI PRASETIYO',
            'laki' => '20',
            'perempuan' => '15',
            'jumlah' => '35',
            'created_at' => '2022-06-07 03:29:50',
            'updated_at' => '2022-06-07 03:29:50',
        ]);
        Rombel::create([
            'nm_kelas' => '8A',
            'tingkat' => '8',
            'wl_kelas' => 'MUKHAMMAD YASIN',
            'laki' => '15',
            'perempuan' => '25',
            'jumlah' => '40',
            'created_at' => '2022-06-07 03:29:50',
            'updated_at' => '2022-06-07 03:29:50',
        ]);
    }
}
