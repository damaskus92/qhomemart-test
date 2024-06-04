<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            ['name' => 'Action'],
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'Horror']
        ];

        $movies = [
            [
                "title" => "The Raid 2: Berandal",
                "description" => "Ram yang direkrut untuk menyusup ke sindikat kriminal berbahaya di Jakarta. Rama diminta untuk tetap waspada saat melakukan penyamaran. Karena setelah penyergapan di sarang gembong narkoba bernama Tama, nyawa Rama dan keluarganya dalam bahaya. Rama pun ditugaskan mendekati Ucok, putra bos narkoba bernama Bangun.",
                "genre_id" => 1,
                "release_date" => "2014-03-28"
            ],
            [
                "title" => "Serigala Terakhir",
                "description" => "Teman masa kecil yang memiliki cerita dan kondisi yang sama membuat satu geng dengan teman-temannya yang lain. Geng mereka bernama Serigala Terakhir a.k. The Last Wolves. Mereka mempunyai impian untuk menjadi mafia terbesar yang bisa mereka raih.",
                "genre_id" => 1,
                "release_date" => "2009-11-05"
            ],
            [
                "title" => "Gundala",
                "description" => "Sancaka hidup di jalanan sejak ditinggal ayah dan ibunya. Menghadapi hidup yang keras, Sancaka belajar untuk bertahan hidup dengan tidak peduli dengan orang lain dan hanya mencoba untuk mendapatkan tempat yang aman bagi dirinya sendiri. Ketika situasi kota semakin tidak aman dan ketidakadilan merajalela di seluruh negeri, Sancaka harus buat keputusan yang berat, tetap hidup di zona amannya, atau keluar sebagai Gundala untuk membela orang-orang yang ditindas.",
                "genre_id" => 1,
                "release_date" => "2019-08-29"
            ],
            [
                "title" => "Merantau",
                "description" => "Yuda, seorang pendekar silat Minangkabau aliran Harimau dalam persiapan akhir untuk memulai perantauannya. Ia harus meninggalkan keluarganya, ibu tercinta, Wulan, dan udanya, Yayan, kenyamanan, keindahan kampung halamannya, untuk mencari eksistensi dirinya di keserabutan kota Jakarta.",
                "genre_id" => 1,
                "release_date" => "2009-08-06"
            ],
            [
                "title" => "212 Warrior",
                "description" => "Wiro Sableng ditugaskan oleh mentornya Sinto Gendeng untuk menangkap mantan murid pengkhianatnya, Mahesa Birawa. Bergabung dengan teman-temannya, Anggini & Bujang Gila Tapak Sakti, Wiro tidak hanya akan mengetahui niat jahat Mahesa, tetapi juga akan menemukan panggilan sejatinya sebagai pahlawan.",
                "genre_id" => 1,
                "release_date" => "2018-08-30"
            ],
            [
                "title" => "My Stupid Boss",
                "description" => "Film ini mengisahkan tentang hubungan antara seorang karyawan dan bossnya yang berkelakuan super ajaib! Diana tinggal di Kuala Lumpur mengikuti Dika, suaminya yang bekerja di sana. Diana lalu melamar bekerja di satu perusahaan. Bossnya kebetulan adalah teman kuliah Dika sewaktu di Amerika.",
                "genre_id" => 2,
                "release_date" => "2016-05-19"
            ],
            [
                "title" => "Srimulat: Hil yang Mustahal - Babak Pertama",
                "description" => "Kelompok lawak Srimulat yang tengah populer di Jawa, mendadak terganggu penampilannya karena muncul pemain kendang yang lebih lucu bernama Gepeng. Tepat pada saat itu, sebuah telegram dari Ibukota datang, mengundang Srimulat tampil di TV Nasional.",
                "genre_id" => 2,
                "release_date" => "2022-05-19"
            ],
            [
                "title" => "Ngeri-Ngeri Sedap",
                "description" => "Pak Domu dan Mak Domu yang tinggal bersama Sarma, ingin sekali tiga anaknya: Domu, Gabe dan Sahat yang sudah lama merantau pulang untuk menghadiri acara adat, tetapi mereka menolak pulang karena hubungan mereka tidak harmonis dengan Pak Domu.",
                "genre_id" => 2,
                "release_date" => "2022-06-02"
            ],
            [
                "title" => "Cek Toko Sebelah",
                "description" => "Erwin menikmati hidupnya dengan karir gemilang di usia muda, dan kekasih cantik yang tak kalah sukses, Natalie. Tapi semua jadi pelik saat Koh Afuk yang kesehatannya makin memburuk, ingin mewariskan toko sembakonya kepada Erwin, anak kesayangannya.",
                "genre_id" => 2,
                "release_date" => "2016-12-28"
            ],
            [
                "title" => "Warkop DKI Reborn: Jangkrik Boss!",
                "description" => "Dono, Kasino dan Indro kembali beraksi di tengah hiruk pikuknya kota DKI Jakarta. Mereka sekali lagi berperan sebagai personel sebuah Lembaga Swasta yang bernama CHIIPS (Cara Hebat Ikut-Ikutan Penanggulangan Sosial).",
                "genre_id" => 2,
                "release_date" => "2016-09-02"
            ],
            [
                "title" => "Keluarga Cemara",
                "description" => "ABAH, sangat ingin bertahan setelah rumah dan pasca hartanya disita oleh debt collector untuk membayar hutang perusahaan yang disebabkan oleh kakak iparnya, dengan cara pindah sementara ke rumah di desa terpencil di Jawa Barat. Rumah itu merupakan rumah masa kecilnya, sebuah warisan dari ayahnya. Namun dia menghadapi kesulitan karena kasusnya kalah di pengadilan dan keluarganya terancam selamanya hidup dalam kemiskinan di desa itu.",
                "genre_id" => 3,
                "release_date" => "2019-01-03"
            ],
            [
                "title" => "Tersanjung",
                "description" => "Yura gadis malang yang tinggal dengan orang tua angkat, dibuai oleh harapan jatuh ke pelukan keluarga kaya. Tapi malang tak bisa ditolak, Yura yang sempat tersanjung, mengecap harapan sesaat, mesti dicampakkan.",
                "genre_id" => 3,
                "release_date" => "2020-03-19"
            ],
            [
                "title" => "Akhir Kisah Cinta Si Doel",
                "description" => "Kepulangan SARAH bersama DUL ke Jakarta, disambut bahagia oleh keluarga DOEL. Namun hal tersebut juga membuat ZAENAB, SARAH, dan DOEL dihadapkan pada pilihan besar. ZAENAB yang positif hamil dan masih trauma pernah kehilangan buah hati di masa lalu, kini harus memilih antara tetap berada di sisi DOEL, atau merelakannya demi menyatukan kembali sebuah keluarga.",
                "genre_id" => 3,
                "release_date" => "2020-01-23"
            ],
            [
                "title" => "Mencuri Raden Saleh",
                "description" => "Pencurian terbesar abad ini tinggal menghitung hari menjelang tanggal eksekusinya. Komplotan sudah lengkap dan siap menjalankan misi untuk mencuri lukisan sang maestro, Raden Saleh, yang berjudul Penangkapan Diponegoro. Pemalsuan, peretasan, pertarungan, dan manipulasi terjadi dalam pencurian berencana yang dijalankan oleh sekelompok anak muda amatiran.",
                "genre_id" => 3,
                "release_date" => "2022-08-25"
            ],
            [
                "title" => "Miracle in Cell No. 7",
                "description" => "Dodo Rozak hanya ingin menjadi ayah yang baik bagi anaknya, Kartika, sekalipun dia hanyalah pria dengan kecerdasan terbatas, bertingkah dan berperilaku seperti anak-anak. Pada kenyataannya, justru Kartika yang lebih sering menjaga dan merawat ayahnya. Tapi keduanya hidup bahagia. Kartika bangga pada ayahnya yang berjualan balon sehari-harinya.",
                "genre_id" => 3,
                "release_date" => "2022-09-08"
            ],
            [
                "title" => "Pengabdi Setan",
                "description" => "Setelah sakit aneh selama 3 tahun, Ibu akhirnya meninggal dunia. Bapak lalu memutuskan untuk kerja di luar kota meninggalkan anak-anak. Tak lama kemudian, anak-anak merasa bahwa Ibu kembali berada di rumah. Situasi semakin menyeramkan ketika mereka mengetahui bahwa Ibu datang lagi tidak sekedar untuk menjenguk, tapi untuk menjemput mereka.",
                "genre_id" => 4,
                "release_date" => "2017-09-28"
            ],
            [
                "title" => "Pengabdi Setan 2: Communion",
                "description" => "Beberapa tahun setelah berhasil menyelamatkan diri dari kejadian mengerikan yang membuat mereka kehilangan ibu dan si bungsu Ian, Rini dan adik-adiknya, Toni dan Bondi, serta Bapak tinggal di rumah susun karena percaya tinggal di rumah susun aman jika terjadi sesuatu karena ada banyak orang.",
                "genre_id" => 4,
                "release_date" => "2022-08-04"
            ],
            [
                "title" => "Perempuan Tanah Jahanam",
                "description" => "Maya jatuh bangun hidup di kota tanpa keluarga, ia hanya memiliki sahabat bernama Dini. Saat usaha bersama mereka membutuhkan modal lebih, Maya yang mendapatkan informasi bahwa dia mungkin memiliki harta warisan dari keluarganya yang kaya di desa, membuatnya pergi mengunjungi kampung halaman yang tak pernah dikenalnya itu. Sesampainya di kampung yang jauh terpencil di tengah hutan, Maya dan Dini sampai di rumah besar yang kosong. Situasi sekitar juga terlihat aneh, salah satunya banyak kuburan anak-anak. Hingga pada suatu malam, Maya mendengar jeritan perempuan yang hendak melahirkan. Maya menuju asal suara dan menyaksikan proses kelahiran anak tersebut. Dari situlah, sedikit demi sedikit, misteri kampung yang kini ditinggali Maya dan Dini mulai terungkap.",
                "genre_id" => 4,
                "release_date" => "2019-10-17"
            ],
            [
                "title" => "KKN di Desa Penari",
                "description" => " Di Desa Penari diadaptasi dari salah satu cerita horror yang telah viral di tahun 2019 melalui Twitter, menurut sang penulis, cerita ini diambil dari sebuah kisah nyata sekelompok mahasiswa yang tengah melakukan program KKN (Kuliah Kerja Nyata) di Desa Penari. Tak berjalan mulus, serentetan pengalaman horror pun menghantui mereka hingga program KKN tersebut berakhir tragis.",
                "genre_id" => 4,
                "release_date" => "2022-04-30"
            ],
            [
                "title" => "Sebelum Iblis Menjemput",
                "description" => " ini bercerita tentang seorang PEREMPUAN MUDA (20-an) dengan hidup yang kelam. IBUnya (50-an) meninggal dengan misterius, kemudian AYAHnya (60-an) meninggalkan Perempuan Muda dan menikah kembali dengan seorang IBU CANTIK (40-an) yang sudah memiliki dua orang ANAK (20-an) dengan umur sepantaran dengan Perempuan Muda.",
                "genre_id" => 4,
                "release_date" => "2018-08-09"
            ],
        ];

        $this->db->table('genres')->insertBatch($genres);
        $this->db->table('movies')->insertBatch($movies);
    }
}
