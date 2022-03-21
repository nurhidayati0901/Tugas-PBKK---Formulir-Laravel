<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Nur Hidayati',
        //     'email' => 'nurhidayati@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Naila Safitri',
        //     'email' => 'nailaaa@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Article::factory(20)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Article::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Alasan untuk Belajar Coding',
        //     'slug' => 'alasan-untuk-belajar-coding',
        //     'body' => '<p>Tidak dapat dipungkiri lagi bahwa teknologi sekarang sudah mulai mendominasi 
        //     sejumlah industri yang ada di dunia. Saat kita masuk ke dunia kerja, kita minimal 
        //     harus bisa mengerti cara menggunakan teknologi seperti komputer, dsb. Dan dengan 
        //     berkembangnya teknologi, banyak orang yang mulai tertarik untuk belajar coding, 
        //     dan bahkan banyak tokoh terkenal yang mulai mendukung anak-anak muda untuk belajar 
        //     coding.</p><p>Tapi sebenarnya apa sih alasan sebenarnya kita perlu belajar coding? Mengapa hal 
        //     ini sangat penting sampai banyak yang mulai encourage anak-anak muda untuk
        //     mempelajarinya? Dan apa manfaat yang dapat kita peroleh dengan mempelajarinya?</p>
        //     <p>Coding, atau disebut juga sebagai programming, adalah suatu kegiatan dimana kita 
        //     membuat suatu perintah untuk komputer jalankan, menggunakan sebuah bahasa yang 
        //     mudah dimengerti oleh komputer. Semua hal yang dilakukan oleh komputer, itu 
        //     memerlukan suatu kode didalamnya, yang dimana hal ini menyebabkan banyak orang 
        //     untuk mulai tertarik dengan coding.</p><p>Contoh dari manfaat yang dapat kita 
        //     peroleh yakni, coding dapat melatih problem solving skill dan logika kita. 
        //     Saat kita sedang membuat kode, kita tidak hanya menyelesaikan soal fisika yang 
        //     ada rumusnya, melainkan kita harus membuat rumus dan cara kita sendiri untuk 
        //     menyelesaikan suatu masalah. Hal ini tentu saja dapat melatih cara logika kita bekerja. 
        //     Kita akan mulai berpikir secara lebih kritis, kita dapat melihat terhadap suatu masalah 
        //     secara lebih detail, kita dapat menemukan suatu jawaban dengan lebih mudah, dll.</p>',
        //     'excerpt' => 'Tidak dapat dipungkiri lagi bahwa teknologi sekarang sudah mulai mendominasi 
        //     sejumlah industri yang ada di dunia.'
        // ]);

        // Article::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Berkarir sebagai Web Developer',
        //     'slug' => 'berkarir-sebagai-web-developer',
        //     'body' => '<p>Web developer adalah profesi yang bertugas untuk membuat aplikasi dan website. 
        //     Pilihan karir ini cukup prospektif karena semakin lama, semakin banyak perusahaan 
        //     yang ingin membuat website. Sebelum Anda memutuskan untuk menjadi web developer, 
        //     tentunya Anda harus mempunyai tujuan yang jelas terlebih dulu. Apakah Anda ingin 
        //     menyelami karir sebagai senior developer? Membuat jasa pembuatan website? Atau 
        //     hanya sekedar membuat toko online? Oleh karena itu, langkah pertama untuk menjadi 
        //     web developer adalah menentukan tujuan. Sehingga lebih jelas membuat keputusan 
        //     tentang apa saja yang perlu dipelajari.</p><p>Front end developer adalah profesi yang 
        //     bertanggung jawab untuk mengembangkan website dari sisi tampilan dengan menggunakan 
        //     HTML, CSS, dan JavaScript. Seorang front-end developer mengurusi desain website secara 
        //     keseluruhan. Mulai dari menu (development, design, marketing, company), tombol interaksi, 
        //     dan gambar untuk meningkatkan pengalaman user saat membuka website. Itulah mengapa seorang 
        //     front-end dituntut untuk kreatif dan memiliki skill desain yang cukup –paling tidak 
        //     tahu tentang desain.</p><p>Backend developer adalah profesi yang bertugas untuk mengatur 
        //     server, penerimaan data dari front end, dan lain-lain. Jika front-end berurusan
        //     dengan tampilan depan, back-end developer berurusan dengan penulisan kode yang tidak 
        //     terlihat oleh pengunjung. Umumnya back-end developer berurusan dengan berbagai 
        //     peningkatan dan perbaikan fungsi sistem, API, library, dan lain sebagainya.</p>
        //     <p>Seorang full stack developer adalah gabungan dari keduanya, harus mengurusi front-end 
        //     sampai dengan back-end. Jadi Full Stack Developer dituntut tidak hanya mempunyai 
        //     keahlian dalam mengembangkan bagian depan website saja melainkan juga di dalamnya. 
        //     Selain itu, seorang full stack developer setidaknya mempunyai pengetahuan tentang 
        //     manajemen server, API, websocket, database, pemrograman, dan struktur website. 
        //     Penting juga untuk memahami disiplin ilmu lain yang berhubungan dengan tampilan depan 
        //     seperti user experience (UX) dan user interface (UI).</p>',
        //     'excerpt' => 'Web developer adalah profesi yang bertugas untuk membuat aplikasi dan website. 
        //     Pilihan karir ini cukup prospektif karena semakin lama, semakin banyak perusahaan 
        //     yang ingin membuat website.'
        // ]);
    }
}
