<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama_siswa' => "Chiqo Rifky Saputra",
            'username' => 'chiqors',
            'email' => 'fathoni105@gmail.com',
            'password' => Hash::make('chiqors'),
        ]);
        DB::table('practices')->insert([
            'judul_practice' => 'Latihan Font',
            'pertanyaan' => 'Buatlah kata "Aku tidak <b>Menyerah</b> <i>terhadap</i> Makanan <u>Favorit</u>" dalam bentuk format HTML!',
            'jawaban' => 'Aku tidak <b>Menyerah</b> <i>terhadap</i> Makanan <u>Favorit</u>',
            'skor_nilai' => 10,
            'kategori' => 'html'
        ]);
        DB::table('explores')->insert([
            'judul_materi' => 'Font',
            'isi_materi' => 'Font adalah desain grafis yang diterapkan ke kumpulan angka, simbol, dan karakter. Font adalah kombinasi dari jenis huruf dan kualitas lainnya, seperti ukuran, tebal, dan jarak. Misalnya, Times Roman adalah jenis huruf yang menentukan bentuk setiap karakter. Pada Times Roman, ada banyak font untuk dipilih – ukuran yang berbeda, miring, tebal, dan sebagainya. (Istilah font sering digunakan secara tidak benar sebagai sinonim untuk jenis huruf.)',
            'kategori' => 'html'
        ]);
    }
}
