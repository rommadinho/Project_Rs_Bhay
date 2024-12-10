<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class Pegawai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed the table
        DB::table('pegawai')->insert([
            [
                'id' => 1,
                'nik' => 'RSBL-221',
                'nama' => 'ARIS NUGROHO,S.Kep.Ners',
                'jk' => 'Pria',
                'jbtn' => 'STAF ASURANSI',
                'jnj_jabatan' => 'PLSN',
                'kode_kelompok' => '-',
                'kode_resiko' => '003',
                'kode_emergency' => '003',
                'departemen' => 'STF',
                'bidang' => 'Non Medis',
                'stts_wp' => 'K/1',
                'stts_kerja' => 'AK',
                'npwp' => '-',
                'pendidikan' => 'S1',
                'gapok' => 0,
                'tmp_lahir' => 'LUMAJANG',
                'tgl_lahir' => '1984-01-25',
                'alamat' => 'Dawuhan Wetan Rt.002 Rw.008 Rowokangkung',
                'kota' => 'LUMAJANG',
                'mulai_kerja' => '2022-01-01',
                'ms_kerja' => '<1',
                'indexins' => 'IGD',
                'bpd' => 'BNI',
                'rekening' => '-',
                'stts_aktif' => 'AKTIF',
                'wajibmasuk' => -5,
                'pengurang' => 0,
                'indek' => 0,
                'mulai_kontrak' => '2022-01-01',
                'cuti_diambil' => 0,
                'dankes' => 0,
                'photo' => 'pages/pegawai/photo/ARIS NUGROHO.jpg',
                'no_ktp' => '3508082412750001',
            ],
            [
                    'id' => 2,
                    'nik' => 'RSBL-006',
                    'nama' => 'dr.SRI HARSONO',
                    'jk' => 'Pria',
                    'jbtn' => 'DOKTER UMUM',
                    'jnj_jabatan' => 'KORB',
                    'kode_kelompok' => '-',
                    'kode_resiko' => '003',
                    'kode_emergency' => '003',
                    'departemen' => 'IGD',
                    'bidang' => 'Dokter Umum',
                    'stts_wp' => 'K/2',
                    'stts_kerja' => 'AK',
                    'npwp' => '-',
                    'pendidikan' => 'S1',
                    'gapok' => 0,
                    'tmp_lahir' => 'KLATEN',
                    'tgl_lahir' => '1982-04-02',
                    'alamat' => 'Ngawen Rt.002 Rw.008',
                    'kota' => 'LUMAJANG',
                    'mulai_kerja' => '2022-01-01',
                    'ms_kerja' => '<1',
                    'indexins' => 'IGD',
                    'bpd' => 'BNI',
                    'rekening' => '-',
                    'stts_aktif' => 'AKTIF',
                    'wajibmasuk' => -5,
                    'pengurang' => 0,
                    'indek' => 0,
                    'mulai_kontrak' => '2022-01-01',
                    'cuti_diambil' => 0,
                    'dankes' => 0,
                    'photo' => 'pages/pegawai/photo/dr. SRI HARSONO.jpeg',
                    'no_ktp' => '3310220204820001',
                ],
                [
                    'id' => 3,
                    'nik' => 'D0000003',
                    'nama' => 'dr.Fibriani Dyah Sofiana,Sp.PA',
                    'jk' => 'Wanita',
                    'jbtn' => 'DOKTER',
                    'jnj_jabatan' => 'PLSN',
                    'kode_kelompok' => '-',
                    'kode_resiko' => '003',
                    'kode_emergency' => '003',
                    'departemen' => '-',
                    'bidang' => 'Medis',
                    'stts_wp' => 'K/2',
                    'stts_kerja' => 'AK',
                    'npwp' => '-',
                    'pendidikan' => 'S2',
                    'gapok' => 0,
                    'tmp_lahir' => 'LUMAJANG',
                    'tgl_lahir' => '1975-02-22',
                    'alamat' => 'Jl Slamet Riyadi No.58 Rt.03 RW.14 Tompokersan - Lumajang',
                    'kota' => 'LUMAJANG',
                    'mulai_kerja' => '2022-01-01',
                    'ms_kerja' => '<1',
                    'indexins' => 'IGD',
                    'bpd' => 'BNI',
                    'rekening' => '-',
                    'stts_aktif' => 'AKTIF',
                    'wajibmasuk' => -5,
                    'pengurang' => 0,
                    'indek' => 0,
                    'mulai_kontrak' => '2022-01-01',
                    'cuti_diambil' => 0,
                    'dankes' => 0,
                    'photo' => 'pages/pegawai/photo/',
                    'no_ktp' => '3508106202750004',
                ],
            ]
        );
    }
}
