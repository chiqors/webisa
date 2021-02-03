<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Daily_Quest;
use App\Models\Practice;
use App\Models\Explore;
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
        User::insert([[
            'nama_siswa' => "Chiqo Rifky Saputra",
            'username' => 'chiqors',
            'email' => 'fathoni105@gmail.com',
            'password' => Hash::make('chiqors')
        ],[
            'nama_siswa' => "A Gamal Robby Abdulkarim",
            'username' => 'gamal',
            'email' => 'xcleker504@gmail.com',
            'password' => Hash::make('gamal'),
        ],[
            'nama_siswa' => "Oktavian Triwinata Putra",
            'username' => 'okta',
            'email' => 'okta@gmail.com',
            'password' => Hash::make('okta123'),
        ],[
            'nama_siswa' => "Wahid Herlambang",
            'username' => 'wahid',
            'email' => 'wahid@gmail.com',
            'password' => Hash::make('wahid123'),
        ],[
            'nama_siswa' => "Cessario Sheva L",
            'username' => 'rio123',
            'email' => 'cessario@gmail.com',
            'password' => Hash::make('rio123'),
        ],[
            'nama_siswa' => "Ujang Jaelani",
            'username' => 'ujang',
            'email' => 'ujang@gmail.com',
            'password' => Hash::make('ujang'),
        ],[
            'nama_siswa' => "Mahmud Budinoto",
            'username' => 'mahmud',
            'email' => 'mahmud@gmail.com',
            'password' => Hash::make('mahmud'),
        ],[
            'nama_siswa' => "Jokito Pojo",
            'username' => 'jokito',
            'email' => 'jokito@gmail.com',
            'password' => Hash::make('jokito'),
        ],[
            'nama_siswa' => "Sakmad bahrudin",
            'username' => 'Sakmad',
            'email' => 'Sakmad@gmail.com',
            'password' => Hash::make('Sakmad'),
        ],[
            'nama_siswa' => "udinato juned",
            'username' => 'juned',
            'email' => 'juned@gmail.com',
            'password' => Hash::make('juned'),
        ]]);
        Practice::insert([[
            'judul_practice' => 'Latihan Font',
            'pertanyaan' => 'Buatlah kata "Aku tidak <b>Menyerah</b> <i>terhadap</i> Makanan <u>Favorit</u>" dalam bentuk format HTML!',
            'jawaban' => 'Aku tidak <b>Menyerah</b> <i>terhadap</i> Makanan <u>Favorit</u>',
            'skor_nilai' => 10,
            'kategori' => 'html'
        ],[
            'judul_practice' => 'Pengenalan php',
            'pertanyaan' => 'Apa Kepanjangan Dari PHP ?',
            'jawaban' => 'Hypertext Preprocessor',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Pengenalan php',
            'pertanyaan' => 'File PHP memiliki exstensi file ?',
            'jawaban' => '.php',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Latihan Menampilkan di PHP',
            'pertanyaan' => 'tulisakan sintak php untuk menampilkan "Hello world!" menggunakan echo !',
            'jawaban' => 'echo "Hello world!";',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Sintak PHP Dasar',
            'pertanyaan' => 'Skrip PHP dimulai dengan ?',
            'jawaban' => '<?php',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Latihan menggunakan komentar di PHP',
            'pertanyaan' => 'Buatlah komentar pada kata "ini adalah komentar" !',
            'jawaban' => '//ini adalah komentar',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'PHP Matematika',
            'pertanyaan' => 'Keluaran dari skrip berikut "<b>echo(min(0, 150, 30, 20, -8, -200));</b>" adalah ?',
            'jawaban' => '-200',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Latihan PHP IF',
            'pertanyaan' => '$t = 20;, tampilkan "Saya Hebat!" jika $t kurang dari 20 ! <b>Catatan : Jawaban tidak menggunakan spasi kecuali kata yang harus di tampilkan</b>',
            'jawaban' => 'if($t<"20"){echo"Saya Hebat!";}',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Latihan Loop',
            'pertanyaan' => 'tampilkan angka <b>1 sampai 10</b> menggunakan loop <b>FOR</b> dengan variabel <b>x</b>',
            'jawaban' => 'for($x=0;$x<=10;$x++){echo $x;}',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Latihan variabel',
            'pertanyaan' => 'Apa tipe data dari variabel <b>$x = "10";</b>',
            'jawaban' => 'string',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ],[
            'judul_practice' => 'Latihan Variabel',
            'pertanyaan' => 'tuliskan skrip untuk menampilkan hasil dari penjumlahan <b>$x = 1; dan $y = 2;</b> !',
            'jawaban' => 'echo $x+$y;',
            'skor_nilai' => 10,
            'kategori' => 'php'
        ]]);
        Daily_Quest::insert([[
            'judul_daily_quest' => 'Selesaikan pertanyaan dibawah ini',
            'pertanyaan' => 'Buatlah kata "Aku tidak <b>Menyerah</b> <i>terhadap</i> Makanan <u>Favorit</u>" dalam bentuk format HTML!',
            'jawaban' => 'Aku tidak <b>Menyerah</b> <i>terhadap</i> Makanan <u>Favorit</u>',
            'skor_nilai' => 10,
            'set_time' => '2021-02-04'
        ],[
            'judul_daily_quest' => 'Tambahkan underline di menyerah',
            'pertanyaan' => 'Rianda tidak <u>Menyerah</u>!',
            'jawaban' => 'Rianda tidak <u>Menyerah</u>',
            'skor_nilai' => 10,
            'set_time' => '2021-02-04'
        ]]);
        Explore::insert([
        [
            'judul_materi' => 'Font',
            'isi_materi' => 'Font adalah desain grafis yang diterapkan ke kumpulan angka, simbol, dan karakter. Font adalah kombinasi dari jenis huruf dan kualitas lainnya, seperti ukuran, tebal, dan jarak. Misalnya, Times Roman adalah jenis huruf yang menentukan bentuk setiap karakter. Pada Times Roman, ada banyak font untuk dipilih – ukuran yang berbeda, miring, tebal, dan sebagainya. (Istilah font sering digunakan secara tidak benar sebagai sinonim untuk jenis huruf.)',
            'kategori' => 'html'
        ],[
            'judul_materi' => 'PENGENALAN PHP',
            'isi_materi' => '<p style="text-align:center"><strong>PENGENALAN PHP</strong></p>

            <p>1. PHP adalah bahasa skrip server, dan alat yang ampuh untuk membuat halaman Web yang dinamis dan interaktif.<br />
            2. PHP adalah alternatif yang banyak digunakan, gratis, dan efisien untuk pesaing seperti ASP Microsoft.<br />
            3. PHP 7 adalah rilis stabil terbaru.</p>

            <p>Apa Yang Harus Anda Ketahui ?<br />
            Sebelum melanjutkan, Anda harus memiliki pemahaman dasar tentang berikut ini:<br />
            - HTML<br />
            - CSS<br />
            - JavaScript</p>

            <p>Apa itu PHP?<br />
            - PHP adalah singkatan dari &quot;PHP: Hypertext Preprocessor&quot;<br />
            - PHP adalah bahasa scripting open source yang banyak digunakan<br />
            - Skrip PHP dijalankan di server<br />
            - PHP gratis untuk diunduh dan digunakan</p>

            <p>Apa itu File PHP?<br />
            - File PHP dapat berisi teks, HTML, CSS, JavaScript, dan kode PHP<br />
            - Kode PHP dijalankan di server, dan hasilnya dikembalikan ke browser sebagai HTML biasa<br />
            - File PHP memiliki ekstensi &quot; .php&quot;</p>

            <p>Apa Yang Dapat Dilakukan PHP?<br />
            - PHP dapat menghasilkan konten halaman dinamis<br />
            - PHP dapat membuat, membuka, membaca, menulis, menghapus, dan menutup file di server<br />
            - PHP dapat mengumpulkan data formulir<br />
            - PHP dapat mengirim dan menerima cookie<br />
            - PHP dapat menambah, menghapus, mengubah data dalam database Anda<br />
            - PHP dapat digunakan untuk mengontrol akses pengguna<br />
            - PHP dapat mengenkripsi data<br />
            - Dengan PHP Anda tidak terbatas pada keluaran HTML. Anda dapat mengeluarkan gambar, file PDF, dan bahkan film Flash. Anda juga dapat mengeluarkan teks apa pun, seperti XHTML dan XML.</p>

            <p>Mengapa PHP?<br />
            - PHP berjalan di berbagai platform (Windows, Linux, Unix, Mac OS X, dll.)<br />
            - PHP kompatibel dengan hampir semua server yang digunakan saat ini (Apache, IIS, dll.)<br />
            - PHP mendukung berbagai macam database<br />
            - PHP gratis. Unduh dari sumber resmi PHP: www.php.net<br />
            - PHP mudah dipelajari dan dijalankan secara efisien di sisi server</p>

            <p>Apa yang baru di PHP 7<br />
            - PHP 7 jauh lebih cepat daripada rilis stabil populer sebelumnya (PHP 5.6)<br />
            - PHP 7 telah meningkatkan Penanganan Kesalahan<br />
            - PHP 7 mendukung Deklarasi Jenis yang lebih ketat untuk argumen fungsi<br />
            - PHP 7 mendukung operator baru (seperti operator spaceship: &lt;=&gt;)</p>
            ',
            'kategori' => 'php'
        ],[
            'judul_materi' => 'Sintak PHP Dasar',
            'isi_materi' => '<p style="text-align:center"><strong>Sintaks PHP Dasar</strong></p>

            <p>Skrip PHP dapat ditempatkan di mana saja di dalam dokumen.<br />
            Skrip PHP dimulai dengan &lt;?php dan diakhiri dengan ?&gt;:<br />
            script echo &quot;&quot;; merupakan script untuk menampilkan di dalam php<br />
            &nbsp;<br />
            <span style="color:#2ecc71">&lt;?php<br />
            // PHP code goes here<br />
            ?&gt;</span></p>

            <p><br />
            Ekstensi file default untuk file PHP adalah &quot; .php&quot;.<br />
            File PHP biasanya berisi tag HTML, dan beberapa kode skrip PHP.<br />
            Di bawah ini, kami memiliki contoh file PHP sederhana, dengan skrip PHP yang menggunakan fungsi PHP bawaan &quot; echo&quot; untuk menampilkan teks &quot;Hello World!&quot; di halaman web:</p>

            <p><span style="color:#2ecc71">&lt;!DOCTYPE html&gt;<br />
            &lt;html&gt;<br />
            &lt;body&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;h1&gt;My first PHP page&lt;/h1&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;?php<br />
            echo &quot;Hello World!&quot;;<br />
            ?&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;/body&gt;<br />
            &lt;/html&gt;</span></p>

            <p>&nbsp;</p>
            ',
            'kategori' => 'php'
        ],[
            'judul_materi' => 'Komentar di PHP',
            'isi_materi' => '<p style="text-align:center"><strong>Komentar di PHP</strong></p>

            <p>Komentar dalam kode PHP adalah baris yang tidak dieksekusi sebagai bagian dari program. Tujuan satu-satunya adalah untuk dibaca oleh seseorang yang melihat kode tersebut.</p>

            <p>Komentar dapat digunakan untuk:</p>

            <p>-Biarkan orang lain memahami kode Anda<br />
            -Ingatkan diri Anda tentang apa yang Anda lakukan - Sebagian besar pemrogram pernah mengalami kembali ke pekerjaan mereka satu atau dua tahun kemudian dan harus memikirkan kembali apa yang telah mereka lakukan. Komentar dapat mengingatkan Anda tentang apa yang Anda pikirkan saat menulis kode<br />
            PHP mendukung beberapa cara berkomentar:<br />
            <strong>Contoh</strong></p>

            <p><span style="color:#2ecc71">&lt;!DOCTYPE html&gt;<br />
            &lt;html&gt;<br />
            &lt;body&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;?php<br />
            // This is a single-line comment</span></p>

            <p><span style="color:#2ecc71"># This is also a single-line comment<br />
            ?&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;/body&gt;<br />
            &lt;/html&gt;</span></p>

            <p><strong>contoh 2</strong></p>

            <p><span style="color:#2ecc71">&lt;!DOCTYPE html&gt;<br />
            &lt;html&gt;<br />
            &lt;body&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;?php<br />
            /*<br />
            This is a multiple-lines comment block<br />
            that spans over multiple<br />
            lines<br />
            */<br />
            ?&gt;</span></p>

            <p><span style="color:#2ecc71">&lt;/body&gt;<br />
            &lt;/html&gt;</span></p>
            ',
            'kategori' => 'php'
        ],[
            'judul_materi' => 'Variabel PHP',
            'isi_materi' => '<p style="text-align:center"><strong>Variabel PHP</strong></p>

            <p><br />
            Membuat (Mendeklarasikan) Variabel PHP<br />
            Di PHP, variabel dimulai dengan $tanda, diikuti dengan nama variabel:</p>

            <p><span style="color:#2ecc71">Contoh<br />
            &lt;?php<br />
            $txt = &quot;Hello world!&quot;;<br />
            $x = 5;<br />
            $y = 10.5;<br />
            ?&gt;</span></p>

            <p>Setelah eksekusi pernyataan di atas, variabel $txtakan menyimpan nilai Hello world!, variabel $x akan menyimpan nilai 5, dan variabel $y akan menyimpan nilai 10.5.</p>

            <p>Catatan: Saat Anda menetapkan nilai teks ke variabel, beri tanda kutip di sekitar nilainya untuk tipe data STRING dan hilangkan kutipnya untuk tipe data perhitungan seperti integer dan float.</p>

            <p>Catatan: Tidak seperti bahasa pemrograman lain, PHP tidak memiliki perintah untuk mendeklarasikan variabel. Itu dibuat saat Anda pertama kali memberikan nilai padanya.</p>

            <p>Variabel PHP<br />
            Variabel dapat memiliki nama pendek (seperti x dan y) atau nama yang lebih deskriptif (age, carname, total_volume).</p>

            <p>Aturan untuk variabel PHP:</p>

            <p>-Variabel dimulai dengan $tanda, diikuti dengan nama variabel<br />
            -Nama variabel harus dimulai dengan huruf atau karakter garis bawah<br />
            -Nama variabel tidak boleh dimulai dengan angka<br />
            -Nama variabel hanya boleh berisi karakter alfa-numerik dan garis bawah (Az, 0-9, dan _)<br />
            -Nama variabel peka huruf besar / kecil ( $agedan $AGEmerupakan dua variabel berbeda)</p>
            ',
            'kategori' => 'php'
        ],[
            'judul_materi' => 'PHP echo dan Print',
            'isi_materi' => '<p style="text-align:center"><strong>PHP echo dan Print</strong></p>

            <p>Dengan PHP, ada dua cara dasar untuk mendapatkan keluaran: echodan print.</p>

            <p>Dalam tutorial ini kami menggunakan echo atau printdi hampir setiap contoh. Jadi, bab ini berisi lebih banyak info tentang kedua pernyataan keluaran tersebut.</p>

            <p>echodan printkurang lebih sama. Keduanya digunakan untuk mengeluarkan data ke layar.</p>

            <p>Perbedaannya kecil: echotidak memiliki nilai pengembalian sedangkan printmemiliki nilai pengembalian 1 sehingga dapat digunakan dalam ekspresi. echodapat menggunakan beberapa parameter (meskipun penggunaan seperti itu jarang terjadi) sementara printdapat menggunakan satu argumen. echosedikit lebih cepat dari print.<br />
            Pernyataan echo PHP<br />
            The echopernyataan dapat digunakan dengan atau tanpa tanda kurung: echoatau echo().</p>

            <p>Teks Tampilan<br />
            Contoh berikut menunjukkan cara mengeluarkan teks dengan echo perintah (perhatikan bahwa teks dapat berisi markup HTML):</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo &quot;&lt;h2&gt;PHP is Fun!&lt;/h2&gt;&quot;;<br />
            echo &quot;Hello world!&lt;br&gt;&quot;;<br />
            echo &quot;I&#39;m about to learn PHP!&lt;br&gt;&quot;;<br />
            echo &quot;This &quot;, &quot;string &quot;, &quot;was &quot;, &quot;made &quot;, &quot;with multiple parameters.&quot;;<br />
            ?&gt;</span></p>

            <p>Variabel Tampilan<br />
            Contoh berikut menunjukkan cara mengeluarkan teks dan variabel dengan echo pernyataan:<br />
            <span style="color:#2ecc71">&lt;?php<br />
            $txt1 = &quot;Learn PHP&quot;;<br />
            $txt2 = &quot;W3Schools.com&quot;;<br />
            $x = 5;<br />
            $y = 4;</span></p>

            <p><span style="color:#2ecc71">echo &quot;&lt;h2&gt;&quot; . $txt1 . &quot;&lt;/h2&gt;&quot;;<br />
            echo &quot;Study PHP at &quot; . $txt2 . &quot;&lt;br&gt;&quot;;<br />
            echo $x + $y;<br />
            ?&gt;</span></p>

            <p>Pernyataan cetak PHP<br />
            The printpernyataan dapat digunakan dengan atau tanpa tanda kurung: printatau print().</p>

            <p>Teks Tampilan</p>

            <p>Contoh berikut menunjukkan cara mengeluarkan teks dengan print perintah (perhatikan bahwa teks dapat berisi markup HTML):</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            print &quot;&lt;h2&gt;PHP is Fun!&lt;/h2&gt;&quot;;<br />
            print &quot;Hello world!&lt;br&gt;&quot;;<br />
            print &quot;I&#39;m about to learn PHP!&quot;;<br />
            ?&gt;</span></p>
            ',
            'kategori' => 'php'
        ],
        [
            'judul_materi' => 'PHP Matematika',
            'isi_materi' => '<p>PHP Matematika</p>

            <p>PHP memiliki seperangkat fungsi matematika yang memungkinkan Anda melakukan tugas matematika pada angka.</p>

            <p>PHP pi () Fungsi<br />
            The pi()fungsi mengembalikan nilai PI:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(pi()); // returns 3.1415926535898<br />
            ?&gt;</span></p>

            <p>Fungsi PHP min () dan max ()<br />
            Fungsi min()dan max()dapat digunakan untuk menemukan nilai terendah atau tertinggi dalam daftar argumen:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(min(0, 150, 30, 20, -8, -200)); &nbsp;// returns -200<br />
            echo(max(0, 150, 30, 20, -8, -200)); &nbsp;// returns 150<br />
            ?&gt;</span></p>

            <p>Fungsi PHP abs ()<br />
            The abs()mengembalikan fungsi absolut nilai (positif) dari nomor:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(abs(-6.7)); &nbsp;// returns 6.7<br />
            ?&gt;</span></p>

            <p>Fungsi PHP sqrt ()<br />
            The sqrt()mengembalikan fungsi akar kuadrat dari angka:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(sqrt(64)); &nbsp;// returns 8<br />
            ?&gt;</span></p>

            <p>Fungsi PHP round ()<br />
            The round()Fungsi putaran angka floating-point ke integer terdekat:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(round(0.60)); &nbsp;// returns 1<br />
            echo(round(0.49)); &nbsp;// returns 0<br />
            ?&gt;</span></p>

            <p>Angka Acak<br />
            The rand()Fungsi menghasilkan nomor acak:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(rand());<br />
            ?&gt;</span></p>

            <p>Untuk mendapatkan lebih banyak kendali atas bilangan acak, Anda dapat menambahkan parameter min dan maks opsional untuk menentukan bilangan bulat terendah dan bilangan bulat tertinggi yang akan dikembalikan.</p>

            <p>Misalnya, jika Anda menginginkan bilangan bulat acak antara 10 dan 100 (inklusif), gunakan rand(10, 100):</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            echo(rand(10, 100));<br />
            ?&gt;</span></p>
            ',
            'kategori' => 'php'
        ],[
            'judul_materi' => 'PHP Loop',
            'isi_materi' => '<p>PHP While loop</p>

            <p>The whileLoop - Loops melalui blok kode selama kondisi tertentu adalah benar.<br />
            PHP sementara Loop<br />
            The whileLoop mengeksekusi blok kode selama kondisi tertentu adalah benar.</p>

            <p>Sintaksis<br />
            while (condition is true) {<br />
            &nbsp; code to be executed;<br />
            }<br />
            Contoh<br />
            Contoh di bawah ini menampilkan angka dari 1 hingga 5:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            $x = 1;</span></p>

            <p><span style="color:#2ecc71">while($x &lt;= 5) {<br />
            &nbsp; echo &quot;The number is: $x &lt;br&gt;&quot;;<br />
            &nbsp; $x++;<br />
            }<br />
            ?&gt;</span></p>

            <p>Contoh Dijelaskan<br />
            $ x = 1; - Inisialisasi penghitung perulangan ($ x), dan setel nilai awal ke 1<br />
            $ x &lt;= 5 - Lanjutkan pengulangan selama $ x kurang dari atau sama dengan 5<br />
            $ x ++; - Tingkatkan nilai penghitung loop sebesar 1 untuk setiap iterasi</p>

            <p>PHP for Loop</p>

            <p>The forLoop digunakan ketika Anda tahu sebelumnya berapa kali script harus dijalankan.</p>

            <p>Sintaksis<br />
            for (init counter; test counter; increment counter) {<br />
            &nbsp; code to be executed for each iteration;<br />
            }<br />
            Parameter:</p>

            <p>penghitung init : Inisialisasi nilai penghitung perulangan<br />
            penghitung tes : Dievaluasi untuk setiap iterasi loop. Jika dievaluasi TRUE, loop berlanjut. Jika dievaluasi ke FALSE, loop berakhir.<br />
            increment counter : Meningkatkan nilai penghitung loop<br />
            Contoh<br />
            Contoh di bawah ini menampilkan angka dari 0 hingga 10:</p>

            <p>Contoh<br />
            <span style="color:#2ecc71">&lt;?php<br />
            for ($x = 0; $x &lt;= 10; $x++) {<br />
            &nbsp; echo &quot;The number is: $x &lt;br&gt;&quot;;<br />
            }<br />
            ?&gt;</span></p>

            <p>Contoh Dijelaskan<br />
            $ x = 0; - Inisialisasi penghitung perulangan ($ x), dan setel nilai awal ke 0<br />
            $ x &lt;= 10; - Lanjutkan pengulangan selama $ x kurang dari atau sama dengan 10<br />
            $ x ++ - Meningkatkan nilai penghitung loop sebesar 1 untuk setiap iterasi</p>
            ',
            'kategori' => 'php'
        ],[
            'judul_materi' => 'PHP Pernyataan IF dan ELSE',
            'isi_materi' => '<p style="text-align:center"><strong>Pernyataan Kondisional PHP</strong></p>

            <p>Sangat sering ketika Anda menulis kode, Anda ingin melakukan tindakan yang berbeda untuk kondisi yang berbeda. Anda dapat menggunakan pernyataan bersyarat dalam kode Anda untuk melakukan ini.</p>

            <p>Di PHP kami memiliki pernyataan bersyarat berikut:</p>

            <p>if pernyataan - menjalankan beberapa kode jika satu kondisi benar<br />
            if...else pernyataan - mengeksekusi beberapa kode jika kondisinya benar dan kode lain jika kondisi itu salah<br />
            if...elseif...else pernyataan - menjalankan kode yang berbeda untuk lebih dari dua kondisi<br />
            switch pernyataan - memilih salah satu dari banyak blok kode untuk dieksekusi<br />
            PHP - Pernyataan if<br />
            The ifpernyataan mengeksekusi beberapa kode jika salah satu kondisi benar.</p>

            <p>Sintaksis<br />
            if (condition) {<br />
            &nbsp; code to be executed if condition is true;<br />
            }<br />
            Contoh<br />
            Output &quot;Semoga harimu menyenangkan!&quot; jika waktu saat ini (JAM) kurang dari 20:</p>

            <p><span style="color:#2ecc71">&lt;?php<br />
            $t = date(&quot;H&quot;);</span></p>

            <p><span style="color:#2ecc71">if ($t &lt; &quot;20&quot;) {<br />
            &nbsp; echo &quot;Have a good day!&quot;;<br />
            }<br />
            ?&gt;</span></p>

            <p><br />
            PHP - Pernyataan if ... else<br />
            The if...elsepernyataan mengeksekusi beberapa kode jika kondisi benar dan kode lain jika kondisi itu adalah palsu.</p>

            <p>Sintaksis<br />
            if (condition) {<br />
            &nbsp; code to be executed if condition is true;<br />
            } else {<br />
            &nbsp; code to be executed if condition is false;<br />
            }<br />
            Contoh<br />
            Output &quot;Semoga harimu menyenangkan!&quot; jika waktu saat ini kurang dari 20, dan &quot;Selamat malam!&quot; jika tidak:</p>

            <p><span style="color:#2ecc71">&lt;?php<br />
            $t = date(&quot;H&quot;);</span></p>

            <p><span style="color:#2ecc71">if ($t &lt; &quot;20&quot;) {<br />
            &nbsp; echo &quot;Have a good day!&quot;;<br />
            } else {<br />
            &nbsp; echo &quot;Have a good night!&quot;;<br />
            }<br />
            ?&gt;</span></p>

            <p>PHP - Pernyataan if ... elseif ... else<br />
            The if...elseif...elsepernyataan mengeksekusi kode yang berbeda selama lebih dari dua kondisi.</p>

            <p>Sintaksis<br />
            if (condition) {<br />
            &nbsp; code to be executed if this condition is true;<br />
            } elseif (condition) {<br />
            &nbsp; code to be executed if first condition is false and this condition is true;<br />
            } else {<br />
            &nbsp; code to be executed if all conditions are false;<br />
            }<br />
            Contoh<br />
            Output &quot;Selamat pagi!&quot; jika waktu saat ini kurang dari 10, dan &quot;Semoga harimu menyenangkan!&quot; jika waktu saat ini kurang dari 20. Jika tidak, maka akan muncul &quot;Selamat malam!&quot;:</p>

            <p><span style="color:#2ecc71">&lt;?php<br />
            $t = date(&quot;H&quot;);</span></p>

            <p><span style="color:#2ecc71">if ($t &lt; &quot;10&quot;) {<br />
            &nbsp; echo &quot;Have a good morning!&quot;;<br />
            } elseif ($t &lt; &quot;20&quot;) {<br />
            &nbsp; echo &quot;Have a good day!&quot;;<br />
            } else {<br />
            &nbsp; echo &quot;Have a good night!&quot;;<br />
            }<br />
            ?&gt;</span></p>
            ',
            'kategori' => 'php'
        ]]);
    }
}
