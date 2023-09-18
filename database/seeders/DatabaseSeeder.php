<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Rt;
use App\Models\User;
use App\Models\Surat;
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
            'nama_rt' => 'RT 27',
            'nama_ketua' => 'Muhammad Iqbal Firdaus'
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

        Surat::create([
            'user_id' => 1,
            'rt_id' => 1,
            'keperluan' => 'Terserah',
            'jenis_surat' => 'Surat Keterangan Usaha'
        ]);
        Surat::create([
            'user_id' => 1,
            'rt_id' => 1,
            'keperluan' => 'Entah',
            'jenis_surat' => 'Surat Keterangan Duda',
            'status' => 'Ditolak'
        ]);
        Surat::create([
            'user_id' => 1,
            'rt_id' => 1,
            'keperluan' => 'Terakhir',
            'jenis_surat' => 'Surat Keterangan Domisili',
            'status' => 'Disetujui'
        ]);

        Post::create([
            'user_id' => 2,
            'judul' => 'judul pertama',
            'body' => 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe'
        ]);
        Post::create([
            'user_id' => 2,
            'judul' => 'judul kedua',
            'body' => 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe'
        ]);
        Post::create([
            'user_id' => 2,
            'judul' => 'judul ketiga',
            'body' => 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe'
        ]);
    }
}
