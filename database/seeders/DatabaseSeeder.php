<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Rt;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Rt::create([
            'nama_rt' => 'RT 27'
        ]);
        Rt::create([
            'nama_rt' => 'RT 28'
        ]);
        Rt::create([
            'nama_rt' => 'RT 29'
        ]);

        User::create([
            'rt_id' => 1,
            'nik' => '1234567890',
            'password' => bcrypt('12345'),
            'nama' => 'Akhdan Al Wafi',
            'tempat_lahir' => 'Jambi',
            'tanggal_lahir' => '2003-11-07',
            'alamat' => 'Jambi',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Mahasiswa',
            'role' => 'Warga'
        ]);
        User::create([
            'rt_id' => 1,
            'nik' => '1234567891',
            'password' => bcrypt('12345'),
            'nama' => 'Muhammad Iqbal Firdaus',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '2003-02-24',
            'alamat' => 'Muara Bulian',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Pejabat RT',
            'role' => 'Ketua'
        ]);
        User::create([
            'nik' => 'admin',
            'password' => bcrypt('12345'),
            'nama' => 'Admin',
            'role' => 'Admin'
        ]);
    }
}
