<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bahasa;
use App\Models\Jobs;
use App\Models\Penawaran;
use App\Models\Perusahaan;
use App\Models\TypeJob;
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


        User::create([
            'name' => 'Izul Alifajri',
            'email' => 'alifajri@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Isul Alifajri',
            'email' => 'isulalifajri@gmail.com',
            'password' => bcrypt('1234')
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);


        Perusahaan::create([
            'name_company' => 'PT PéMad International Transearch',
            'descript' => '<p>Human touch is at the very heart of our services. We don&rsquo;t only translate.&nbsp;We craft translation in an ingenious way. We are &ldquo;P&eacute;Mad&rdquo;.</p>',
            'images' => 'PTPéMad_new_update_2023-12-18_052441_am.png',
            'contact_info' => '<p>Email : info@pemad.or.id</p>

            <p>Email : marketing@pemad.or.id</p>
            
            <p>Telephone : +62 274 7377040</p>
            
            <p>Telephone&nbsp;: +62 82122421447</p>
            
            <p>Address : Trimukti Square Ruko No. 8-10, Jl. Kaliurang Km. 10 RT/RW 04/22, Ngalangan, Sardonoharjo, Ngaglik, Sleman, D.I. Yogyakarta 55581</p>',
            'jam_kerja' => '<p>Monday&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 08:00-16:00</p>

            <p>Tuesday&nbsp; &nbsp; &nbsp; &nbsp; : 08:00-16:00</p>
            
            <p>Wednesday&nbsp; &nbsp;: 08:00-16:00</p>
            
            <p>Thursday&nbsp; &nbsp; &nbsp; &nbsp;: 08:00-16:00</p>
            
            <p>Friday&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 08:00-16:00</p>
            
            <p>Saturday&nbsp; &nbsp; &nbsp; &nbsp;: 09:00-15:00</p>
            
            <p><strong>Time Zone : UTC+7</strong><br />
            <strong>(Waktu Indonesia Barat)</strong></p>'
        ]);


        $typejob = [
            [
                'type_job' => 'Magang'
            ],
            [
                'type_job' => 'Volunteer'
            ],
            [
                'type_job' => 'Freelance'
            ],
            [
                'type_job' => 'Part Time'
            ],
            [
                'type_job' => 'Full Time'
            ],
            [
                'type_job' => 'Contract'
            ]
        ];
        foreach($typejob as $type){
            TypeJob::create([
                'type_job' => $type['type_job'],
            ]);
        }

        $jobs = [
            [
                'typejob_id' => 5,
                'title' => 'Web Programmer',
                'descript' => '<h2>Tanggung Jawab Pekerjaan :</h2>

                <p>&ndash; Implementasi kode pemrograman sesuai hasil analisis dari Sistem Analyst.</p>
                
                <h2>Keahlian :</h2>
                
                <p>&ndash; Menguasai PHP<br />
                &ndash; Menguasai framework Laravel atau Codeigniter<br />
                &ndash; Menguasai JavaScript, HTML &amp; CSS<br />
                &ndash; Memahami dan menguasai penggunaan REST API</p>
                
                <h2>Kualifikasi :</h2>
                
                <p>&ndash; Pria/Wanita<br />
                &ndash; Usia max 35 tahun<br />
                &ndash; Pendidikan minimal S1<br />
                &ndash; Fresh graduate silahkan melamar</p>
                
                <h2>Waktu Bekerja :</h2>
                
                <p>08.00 &ndash; 17.00, Senin-Jumat</p>
                
                <h2>Tunjangan :</h2>
                
                <p>&ndash; BPJS<br />
                &ndash; Tunjangan Hari Raya</p>
                
                <h2>Insentif :</h2>
                
                <p>&ndash; Bonus Project<br />
                &ndash; Bonus Performance Tahunan</p>'
            ],
            [
                'typejob_id' => 6,
                'title' => 'Sales & Marketing Staff',
                'descript' => '<p>Job description</p>
                <p>We&#39;re leading automotive wire manufacturer looking for attractive talent to face challenging job as Marketing Staff. This position has responsibility in getting order to achieve sales target. We are B2B in nature. Requirements:</p>

                <ul>
                    <li>Min Bachelor Degree, Engineering Background</li>
                    <li>Min IPK 3.00 3. Min 1 years experience in Manufacturing Company in related field</li>
                    <li>Good interpersonal skills, leadership, presentation skills, integrity</li>
                    <li>Willing to be placed in Surabaya If you have experience in Copper/Copper Alloy Industry will be an advantage</li>
                </ul>'
            ],
            [
                'typejob_id' => 5,
                'title' => 'Administration Staff',
                'descript' => '<p>Job Requirements</p>

                <ul>
                    <li>Pendidikan Minimal SMA hingga S1 Akutansi, Manajemen / Administrator Perkantoran</li>
                    <li>Fresh Graduate Maupun Berpengalaman</li>
                    <li>Domisili Sidoarjo (Diutamakan)</li>
                    <li>Menguasai Microsoft Office (terutama World dan Excel)</li>
                    <li>Bisa bekerja dalam individu maupun tim</li>
                    <li>Jujur dan bertanggung jawab</li>
                </ul>'
            ],
        ];

        foreach($jobs as $j){
            Jobs::create([
                'typejob_id' => $j['typejob_id'],
                'title' => $j['title'],
                'descript' => $j['descript']
            ]);
        }

        $offering = [
            [
                'jasa_penawaran' => 'Penerjemahan',
                'price' => '100000',
                'descript' => '<p>P&eacute;Mad menyediakan terjemahan profesional dan berkualitas tinggi. Setiap terjemahan dikerjakan oleh tim penerjemah profesional dengan didukung perangkat lunak terjemahan paling mutakhir.</p>

                <p>Hasil terjemahan di bawah standar dapat memberi kesan bahwa lembaga atau perusahaan Anda tidak terlalu peduli dengan mitra internasional atau pelanggannya. Penerjemahan harus selalu dilakukan oleh penutur asli dan multi-linguis yang idealnya berdomisili di negara bahasa sasaran dan memahami kebutuhan bisnis serta komunikasi Anda. Penerjemah kami adalah para ahli yang selalu mengikuti tren bahasa terkini, istilah teknis, kata-kata gaul, kata serapan, gaya, nada, dan konteks yang sesuai.</p>
                
                <p>Setiap proyek ditangani oleh penerjemah atau tim penerjemah berkualifikasi, tergantung pada besar kecilnya proyek, jangka waktu, editor, dan proofreader yang merupakan penutur asli. Penerjemah kami memiliki sertifikat resmi yang diakui secara internasional.</p>'
            ],
            [
                'jasa_penawaran' => 'Pelokalan',
                'price' => '100000',
                'descript' => '<p>Untuk menarik minat pelanggan di berbagai wilayah di dunia, produk Anda memerlukan penyesuaian dalam hal bahasa dan budaya. Penerjemahan biasa tidaklah cukup. Anda memerlukan layanan pelokalan. Untuk melakukan &ldquo;promosi dalam bahasa lokal&rdquo;, layanan pelokalan adalah solusinya.</p>

                <p>Inti dari pelokalan adalah membuat konten terasa lebih akrab bagi audiens baru. Strategi ini bertujuan untuk membuat audiens merasa bahwa konten tersebut dibuat secara khusus dalam bahasa mereka, bukan hasil penerjemahan. Misalnya, audiens Indonesia lebih suka jika keterangan produk ditampilkan dalam sentimeter, kilogram, dan rupiah, alih-alih inci, pon, dan dolar.</p>
                
                <p>Kami menyediakan layanan pelokalan untuk hampir semua kebutuhan: antarmuka pengguna untuk game atau perangkat lunak, label pakaian, atau informasi nilai gizi yang ditampilkan di kemasan produk. Materi pemasaran, seperti artikel situs web, brosur, dan laporan, juga merupakan bagian penting dari strategi pelokalan.</p>
                
                <p>Jika memerlukan informasi tambahan untuk lebih memahami produk dan layanan Anda, ahli di bidang pelokalan kami akan menghubungi Anda. P&eacute;Mad selalu siap membantu Anda mewujudkan strategi pelokalan Anda.</p>
                
                <ul>
                    <li>Pelokalan Game/Perangkat Lunak</li>
                    <li>Pelokalan Situs Web</li>
                    <li>Pelokalan Media</li>
                    <li>Pelokalan E-learning</li>
                    <li>Transkreasi</li>
                </ul>'
            ],
            [
                'jasa_penawaran' => 'Penyuntingan / Proofreading',
                'price' => '100000',
                'descript' => '<p>Menganalisis, mengedit (dan, apabila perlu, menulis ulang beberapa bagian) dokumen, merupakan proses yang membutuhkan keahlian tinggi dan perspektif tajam terkait konteks dan tujuan. Tim P&eacute;Mad terdiri dari penerjemah multi-bahasa yang datang dari berbagai disiplin dan profesi. Kami memiliki pengalaman di bidang penerbitan, pengiklanan, penggalangan dana, akademik, penulisan teknis, desain kurikulum, penulisan kreatif, dan banyak lagi.&nbsp;</p>

                <p>Proofreading merupakan tahap akhir dalam proses penyuntingan, menitikberatkan pada eror yang jelas terlihat seperti kesalahan eja, tata bahasa, dan tanda baca. Proofread dilakukan hanya setelah semua revisi dari proses penyuntingan diselesaikan.</p>
                
                <p>Penyampaian informasi yang jelas dan tanpa kesalahan kepada audiens adalah hal penting bagi mahasiswa pascasarjana yang sedang menulis disertasi hingga sekretaris perusahaan yang sedang menyusun laporan tahunan. Eror paling kecil dalam kalimat pun dapat membuat pesan gagal tersampaikan dengan jelas.</p>
                
                <p>Pilih editor dan proofreader ahli kami untuk hasil yang terbaik.</p>'
            ],
        ];

        foreach($offering as $off){
            Penawaran::create([
                'jasa_penawaran' => $off['jasa_penawaran'],
                'price' => $off['price'],
                'descript' => $off['descript']
            ]);
        }
        $languange = [
            [
                'name_language' => 'Bahasa Indonesia',
            ],
            [
                'name_language' => 'Bahasa Melayu',
            ],
            [
                'name_language' => 'Bahasa Inggris',
            ],
            [
                'name_language' => 'Bahasa Arab',
            ],
            [
                'name_language' => 'Bahasa Thailand',
            ],
        ];

        foreach($languange as $bhs){
            Bahasa::create([
                'name_language' => $bhs['name_language']
            ]);
        }
    }
}
