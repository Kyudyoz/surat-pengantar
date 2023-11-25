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
            'nama_rt' => 'RT 01',
            'nama_ketua' => 'Muhammad Iqbal Firdaus',
        ]);
        Rt::create([
            'nama_rt' => 'RT 02',
            'nama_ketua' => 'Sabrian'

        ]);
        Rt::create([
            'nama_rt' => 'RT 03',
            'nama_ketua' => 'Reysha'

        ]);

        User::create([
            'rt_id' => 1,
            'nik' => '1234567890123456',
            'password' => bcrypt('12345'),
            'nama' => 'Akhdan Al Wafi',
            'tempat_lahir' => 'Jambi',
            'tanggal_lahir' => '2003-11-07',
            'alamat' => 'Jambi',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Mahasiswa',
            'role' => 'Warga',
            'no_hp' => '628901231232',
            'status' => 'Disetujui'
        ]);
        User::create([
            'rt_id' => 2,
            'nik' => '1234567892123456',
            'password' => bcrypt('12345'),
            'nama' => 'Sabrian',
            'tempat_lahir' => 'Jambi',
            'tanggal_lahir' => '2003-11-07',
            'alamat' => 'Jambi',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Pengurus RT',
            'role' => 'Ketua',
            'no_hp' => '628901231234',
            'status' => 'Disetujui'

        ]);
        User::create([
            'rt_id' => 1,
            'nik' => '1234567891123456',
            'password' => bcrypt('12345'),
            'nama' => 'Muhammad Iqbal Firdaus',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '2003-02-24',
            'alamat' => 'Muara Bulian',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Pejabat RT',
            'role' => 'Ketua',
            'no_hp' => '6282284928931',
            'status' => 'Disetujui'
        ]);
        User::create([
            'rt_id' => 3,
            'nik' => '1234567894123456',
            'password' => bcrypt('12345'),
            'nama' => 'Reysha',
            'tempat_lahir' => 'Jambi',
            'tanggal_lahir' => '2003-02-24',
            'alamat' => 'Muara Bulian',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Pejabat RT',
            'role' => 'Ketua',
            'no_hp' => '628901231237',
            'status' => 'Disetujui'

        ]);
        User::create([
            'rt_id' => 2,
            'nik' => '1234567893123456',
            'password' => bcrypt('12345'),
            'nama' => 'Ilham',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '2003-02-24',
            'alamat' => 'Muara Bulian',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'Mahasiswa',
            'role' => 'Warga',
            'no_hp' => '628901231239',
            'status' => 'Disetujui'

        ]);
        User::create([
            'nik' => 'admin',
            'password' => bcrypt('12345'),
            'nama' => 'Admin',
            'role' => 'Admin',
            'status' => 'Disetujui'
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
            'user_id' => 5,
            'rt_id' => 2,
            'keperluan' => 'Terakhir',
            'jenis_surat' => 'Surat Keterangan Domisili',

        ]);

        Post::create([
            'user_id' => 2,
            'judul' => 'judul pertama',
            'slug' => 'judul-pertama',
            'body' => 'aasijdasoijdaosjdqojwdwqjqwejqadsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssacasascascassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssswpejqwjeqwpeqwjeqwpe'
        ]);
        Post::create([
            'user_id' => 2,
            'judul' => 'judul kedua',
            'slug' => 'judul-kedua',

            'body' => 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe'
        ]);
        Post::create([
            'user_id' => 2,
            'judul' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'body' => 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe'
        ]);
    }
}
