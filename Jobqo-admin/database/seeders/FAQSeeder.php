<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
        	'soal' => 'Apa tandanya jika CV di terima oleh HRD ?',
            'jawaban' => 'Apabila status lamaran anda berubah menjadi Melanjutkan ke seleksi',
            'created_at'=> now()
        ]);

        DB::table('faqs')->insert([
        	'soal' => 'Bagaimana HRD dapat mendaftar kan perusahaan ?',
            'jawaban' => 'HRD dapat mendaftarkan perusahaan dengan mengirimkan email kepada admin jobqo, lalu admin akan memberikan username dan password untuk login ke aplikasi jobqo',
            'created_at'=> now()
        ]);

        DB::table('faqs')->insert([
        	'soal' => 'Berapa lama cv di proses oleh HRD ?  ',
            'jawaban' => 'CV akan di proses paling lama 1 bulan setelah loker closed, HRD memiliki wewenang untuk menerima dan menolak CV applicant.',
            'created_at'=> now()
        ]);

        DB::table('faqs')->insert([
        	'soal' => 'bagaimana cara melamar pekerjaan ?  ',
            'jawaban' => 'Untuk melamar suatu pekerjaan pada aplikasi JOBQO dengan cara login / register terlebih dahulu. upload cv anda dan Kemudian cari pekerjaan yang anda inginkan. Setelah itu pilih pekerjaan yang anda inginkan dan klik " Lamar Sekarang ". Lalu masukkan deskripsi diri anda dan " Submit Lamaran " jika anda merasa cukup untuk mendeskripsikan diri anda',
            'created_at'=> now()
        ]);
    }
}
