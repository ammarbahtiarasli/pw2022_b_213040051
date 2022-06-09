-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 15.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_sejarah_teknologi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Website'),
(2, 'Aplikasi'),
(3, 'Smartphone'),
(4, 'Transportasi'),
(5, 'Komputer'),
(7, 'Informasi dan Komunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(5) NOT NULL,
  `nama_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Pengguna'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `love`
--

CREATE TABLE `love` (
  `id_love` int(10) NOT NULL,
  `id_sejarah` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah_teknologi`
--

CREATE TABLE `sejarah_teknologi` (
  `id_sejarah` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `id_kategori` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah_teknologi`
--

INSERT INTO `sejarah_teknologi` (`id_sejarah`, `judul`, `tanggal`, `gambar`, `body`, `id_kategori`) VALUES
(10, 'Sejarah Teknologi Web Framework Laravel', '2011-06-17', '629e0c4c3b931laravel.png', '&lt;p&gt;Sejarah Laravel pertama kali dibuat oleh Taylor Otwell. Laravel diciptakan oleh Taylor Otwell untuk memberikan alternatif yang lebih baik dari Framework PHP yang yang lain seperti Codeigniter.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Framework Laravel di perkenalkan pertama kali pada 09 juni 2011 dengan versi beta. Masih dibulan yang sama Laravel merilis versi pertamanya yaitu Laravel 1, pada Laravel 1 ini sudah dibekali banyak fitur diantaranya authentication, localisation, models, views, sessions, routing dan fitur-fitur lainya, tetapi pada Laravel 1 masih kurang mendukung untuk controller. Pada versi ini Laravel belum menggunakan konsep MVC. Selanjutnya Laravel 2, versi ini di rilis pada bulan September 2011. Banyak terjadi penigkatan pada Laravel 2, fitur baru utamanya adalah sudah mendukung controller. Fitur ini yang membuat Laravel menjadi Framework MVC sepenuhnya. Apa itu MVC? Nanti akan saya bahas.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Selanjutnya fitur yangbaru yang ga kalah keren adalah templating atau yang sering disebut blade.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Laravel 3 dirilis pada Februari 2012. Pada Laravel 3 mempunyai fitur – fitur baru diantaranya Command-Line Interface (CLI) atau yang biasa disebut Artisan. Pada versi ini juga sudah mendukung database migrations, dan packaging system atau yang sering kita kenal dengan Bundles.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Laravel 4 dirilis pada Mei 2014, dengan sebutan Illuminate. Pada versi ini Laravel sudah menggunakan Composer sebagai package managernya. Berikutnya Laravel 5 dirilis pada Februari 2015. Hingga saat ini versi terakhir Laravel adalah 5.7.*.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Di Laravel 5 ini pun banyak penambahan fitur-fitur beberapa diantaranya Flysystem, Elixir, Socialite dan lainnya.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Sejarah Versi Laravel&amp;nbsp;&lt;/p&gt;&lt;p&gt;V1 Juni 2011&amp;nbsp;&lt;/p&gt;&lt;p&gt;V2 September 2011&amp;nbsp;&lt;/p&gt;&lt;p&gt;v3 Februari 2012&amp;nbsp;&lt;/p&gt;&lt;p&gt;v4 Mei 2013 5.0 04 Februari 2015 04 Augustus 2015 04 Februari 2016&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.1 (LTS) 09 Juni 2015 09 Juni 2017 09 Juni 2018&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.2 21 Desember 2015 21 Juni 2016 21 Desember 2016&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.3 23 Augustus 2016 23 Februari 2017 23 Augustus 2017&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.4 24 Januari 2017 24 Juli 2017 24 Januari 2018&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.5 (LTS) 30 Augustus 2017 30 Augustus 2019 30 Augustus 2020&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.6 7 Februari 2018 7 Augustus 2018 7 Februari 2019&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.7 4 Sepember 2018 4 Februari 2019 4 Sepember 2019&amp;nbsp;&lt;/p&gt;&lt;p&gt;5.8 26 Februari 2019 26 Augustus 2019 26 Februari 2020&amp;nbsp;&lt;/p&gt;&lt;p&gt;6.0 (LTS) 3 Sepember 2019 3 Sepember 2021 3 Sepember 2022&amp;nbsp;&lt;/p&gt;&lt;p&gt;7 3 Maret 2020 3 September 2020 3 Maret 2021&amp;nbsp;&lt;/p&gt;&lt;p&gt;8 8 September 2020 26 Juli 2022 24 Januari 2023&amp;nbsp;&lt;/p&gt;&lt;p&gt;9 8 Februari 2022 8 Agustus 2023 8 Februari 2023&amp;nbsp;&lt;/p&gt;&lt;p&gt;Kelebihan Laravel&amp;nbsp;&lt;/p&gt;&lt;p&gt;1. Dokumentasi Lengkap Platform yang baik adalah platform yang mudah digunakan dan memiliki dokumentasi yang lengkap dan jelas. Karena jika kamu belum hebat dalam bidang web development, akan tetapi memiliki pemahaman PHP yang baik. Maka kalian akan dengan mudah mempelajari Laravel hanya dengan melihat dokumentasinya saja, sebab dokumentasi yang dibuat oleh Laravel tergolong kedalam dokumentasi yang sangat baik, rapi, mudah dan jelas. Kalian bisa lihat dan mulai belajar di https://laravel.com/&amp;nbsp;&lt;/p&gt;&lt;p&gt;2. Forum dan komunitas Sebelum memilih framework apa yang akan kalian gunakan, hal yang cukup penting untuk dipertimbangkan adalah forum dan komunitas. Sebab dengan adanya forum dan komunitas anda dapat mudah belajar dan mencari solusi atas setiap permasalahan yang mungkin anda temukan dalam menggunakan frame work tersebut.&amp;nbsp;&lt;/p&gt;&lt;p&gt;3. Fitur Hal hebat lain yang ada di Laravel adalah menyediakan fitur yang tidak ditemukan di framework lain. Dengan fitur-fitur yang ada dilaravel membuat pembuatan web aplikasi menjadi lebih mudah dan efisien.&amp;nbsp;&lt;/p&gt;&lt;p&gt;4. Open Source Banayak framework open source diluar sana, contohnya Codeigniter, Symphoni dan lain sebagainya. Laravel adalah framework open source yang dapat digunakan oleh semua orang, sangat bagus untuk membuat website yang besar dan kompleks dengan mudah. Hanya dengan text editor dan web server yang telah terinstall PHP untuk memulai.&amp;nbsp;&lt;/p&gt;&lt;p&gt;5. Arsitektur MVC Selain dapat memudahkan pekerjaan, arsitektur MVC juga dapat meningkatkan performace. Dengan menggunakan Arsitektur MVC dalam development kita dapat membuat struktur kode menjadi lebih rapi, dimana pola tersebut memisahkan antara logika dengan tampilan.&lt;/p&gt;', 1),
(31, 'Sejarah Perkembangan Teknologi Komunikasi', '2022-06-05', '629e07d71432dkomunikasi.jpg', '&lt;p&gt;&lt;strong&gt;Komunikasi&lt;/strong&gt; merupakan sebuah istilah yang memiliki makna dimana terjadinya proses pertukaran informasi, kata, ataupun tanda yang dilakukan oleh dua orang atau juga bisa lebih. Proses tersebut atau proses komunikasi dapat dilakukan dengan cara nonverbal maupun verbal. Dalam proses komunikasi, kedua orang atau lebih yang melakukan komunikasi memiliki potensi untuk memberikan ataupun menerima sebuah informasi.&lt;/p&gt;&lt;p&gt;Seseorang dapat mengerti maksud dari orang lain melalui proses komunikasi yang dilakukan orang tersebut. apabila suatu proses komunikasi berjalan dengan lancar dan efektif maka tidak menutup kemungkinan adanya kedekatan dan rasa kebersamaan. Memiliki kemampuan berkomunikasi yang baik merupakan suatu hal penting yang harus dimiliki oleh setiap manusia. Mengapa demikian? Seperti yang sudah kami jelaskan, bahwa komunikasi memegang peranan paling penting dalam kehidupan ini.&lt;/p&gt;&lt;p&gt;Setelah mengetahui makna dari komunikasi, saatnya kamu memberitahukan mengenai arti dari teknologi komunikasi itu.&lt;/p&gt;&lt;p&gt;Pada umumnya, teknologi komunikasi merupakan suatu hal yang merujuk pada semua barang atau alat yang dapat digunakan untuk mendukung proses komunikasi (mengirim, menyampaikan, menerima, memproses, mengedit, mengolah dan memanipulasi informasi).&lt;/p&gt;&lt;h4&gt;&amp;nbsp;&lt;/h4&gt;&lt;h4&gt;Sejarah Teknologi Komunikasi&lt;/h4&gt;&lt;p&gt;Setelah mengetahui mengenai pengertian dari komunikasi dan teknologi komunikasi tersebut, kini saatnya kamu menyajikan tentang sejarah singkat dari perkembangan teknologi komunikasi yang telah terjadi dari satu masa ke masa lainnya.&lt;/p&gt;&lt;h4&gt;1. Teknologi Komunikasi Berupa Lukisan Gua&lt;/h4&gt;&lt;p&gt;Lukisan gua diklaim menjadi metode komunikasi tertua yang ada di dunia. Metode lukisan gua difungsikan sebagai sebuah tanda manusia purba dalam menandai daerah mereka. Tak hanya untuk menandai wilayahnya saja, lukisan gua juga menjadi media untuk merekam berbagai peristiwa penting yang terjadi pada saat itu.&lt;br&gt;Lukisan gua ini biasanya dapat ditemukan di dinding ataupun langit-langit gua tersebut.&lt;/p&gt;&lt;p&gt;Lukisan gua juga memiliki fungsi lain, yakni sebagai fungsi religius serta fungsi simbolis. Fungsi simbolis yang ada pada lukisan gua adalah simbolis untuk berkomunikasi. Symbol-simbol ini biasanya memiliki berbagai wujud dengan makna yang berbeda-beda. Tujuannya tentu hanya untuk menyampaikan pesan tertentu.&lt;/p&gt;&lt;h4&gt;2. Teknologi Komunikasi Melalui Simbol&lt;/h4&gt;&lt;p&gt;Diketahui terdapat ukiran batu yang disebut sebagai petroglyphs yang ditemukan serta dikenalkan pada sekitar 10.000 tahun sebelum masehi.ukiran batu tersebut difungsikan sebagai media perekam cerita oleh manusia purba.&lt;/p&gt;&lt;p&gt;Akhir-akhir ini, kita kerap mendengar fakta bahwa symbol grafis difungsikan sebagai media untuk menggambarkan sebuah konsep ataupun ide tertentu. Diketahui bahwa, negara China menciptakan karakter-karakter yang digunakan untuk berkomunikasi. Berjalannya waktu, huruf abjad pn tercipta dan teknologi komunikasi berkembang dengan bantuan dari terciptanya huruf alphabet.&lt;/p&gt;&lt;h4&gt;3. Teknologi Komunikasi Menggunakan Tanda Asap&lt;/h4&gt;&lt;p&gt;Tanda asap kerap dikenal sebagai sinyal yang difungsikan untuk mengirim pesan atau informasi. Penggunaan teknologi komunikasi tanda asap ini cukup populer dan paling banyak digunakan di China. Contoh penggunaannya adalah ketika seorang penjaga melepaskan sinyal tersebut ke udara. Asap akan diartikan sebagai sebuah pesan yang menuju ke Tembok Besar di China. Ada pula seorang sejarawan asal Yunani yang menggunakan sinyal ini untuk menggantikan huruf alphabet.&lt;/p&gt;&lt;h4&gt;4. Teknologi Komunikasi Penggunaan Merpati&lt;/h4&gt;&lt;p&gt;Burung merpat sangat populer karena mereka mengetahui arah kemana mereka terbang, arah menuju ke rumah mereka bahkan setelah mereka melalui perjalanan yang panjang dan jauh.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Orang-orang yang menggunakan merpati sebagai pengirim pesan mereka biasanya akan meletakkan suatu huruf yang berukuran kecil di leher merpati tersebut dengan harapan bahwa merpati itu akan sampai ke penerima. Merpati memiliki peranan penting dalam perkembangan teknologi komunikasi ini.&lt;/p&gt;&lt;h4&gt;5. Teknologi Komunikasi Sistem Pos&lt;/h4&gt;&lt;p&gt;Setelah berkembangnya zaman, manusia semakin sadar untuk menghentikan penggunaan merpati sebagai pengirim pesan dan beralih dengan menggunakan jasa kurir. Sistem pos ini membuat seseorang yang ingin mengirimkan pesan harus mengirimkannya ke orang lain dan akan dikirimkan ke penerima lewat layanan pos. Dalam sistem pos ini, memerlukan adanya penggunaan kotak surat.&lt;/p&gt;&lt;h4&gt;6. Teknologi Komunikasi Menggunakan Koran&lt;/h4&gt;&lt;p&gt;Koran atau yang dulu dikenal sebagai surat kabar merupakan teknologi komunikasi yang masih digunakan hingga saat ini. Surat kabar atau koran berisi tentang penyampaian sebuah berita yang disampaikan secara tertulis serta berbagai peristiwa-peristiwa yang sedang berlangsung saat itu. Surat kabar sendiri memiliki dua jenis, yakni surat kabar nasional dan surat kabar internasional.&lt;/p&gt;', 7),
(32, 'Sejarah Perkembangan Smartphone dari zaman ke zaman', '2022-05-18', '629e07cb77fffsmartphone.jpeg', '&lt;p&gt;&lt;i&gt;&lt;strong&gt;Smartphone&lt;/strong&gt;&lt;/i&gt; sudah menjadi bagian dari kehidupan kita saat ini. Kita menggunakannya dalam berbagai kegiatan, mulai dari membantu pekerjaan, hiburan, sarana belajar, berinteraksi dengan orang-orang, memotret, dan lain sebagainya. Satu alat kecil tapi bisa melakukan segalanya. Nah, kira-kira bagaimana sih sejarah perkembangan ponsel pintar yang sekarang kita gunakan? Mungkin generasi 2000-an masih kurang familiar dengan beberapa posel ini. Yuk, intip “nenek moyang” &lt;i&gt;smartphone&lt;/i&gt; kesayangan kita. &amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1. IBM Simon Personal Communicator.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;onsel pintar pertama di dunia ini diluncurkan oleh perusahaan IBM pada 16 Agustus 1994 dengan harga yang terbilang cukup mahal, yaitu berkisar 12–14 juta rupiah. Beratnya mencapai 500 gram dengan fitur-fitur yang cukup lengkap pada zamannya. Aplikasi dalam ponsel ini antara lain kalender,&lt;i&gt; e-mail&lt;/i&gt;, catatan, mengirim pesan singkat, dan dilengkapi dengan &lt;i&gt;stylus&lt;/i&gt;. Bentuknya berupa kotak berwana hitam dengan layar berwarna hijau dengan layar sentuh monokrom. Sayangnya apabila sudah digunakan selama 1 jam, ponsel ini harus diisi kembali dayanya. Inilah yang menyebabkan alat komunikasi ini hilang dari pasaran 2 tahun kemudian.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2. Nokia 9000 Communicator.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Ponsel ini dirilis pada tahun 1996 dengan ketebalan 1,5 inci dan bobot 397 gram, serta dilengkapi dengan tombol dial, navigasi, dan tentunya layar monokrom. Nokia 9000 Communicator bisa dibilang yang paling mendekati &lt;i&gt;smartphone&lt;/i&gt; saat ini karena memiliki fitur yang ada di &lt;i&gt;smartphone&lt;/i&gt; modern. Gadget ini juga memiliki &lt;i&gt;keyboard&lt;/i&gt; QWERTY dengan kemampuan mengirim &lt;i&gt;e-mail&lt;/i&gt;, faks, &lt;i&gt;browsing&lt;/i&gt; di internet, pemrosesan kata, hingga lembar kerja. Sistem oprasinya adalah GEOS yang merupakan cikal bakal dari Symbian. Produk terakhirnya adalah Nokia E90 Communicator yang rilis di tahun 2007.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3. PDA Phone.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;PDA Phone yang diperkalkan pada tahun 2005 ini memang jarang digunakan oleh orang Indonesia. Namun ponsel ini lebih sering digunakan oleh para eksekutif yang selalu sibuk dengan pekerjaannya. PDA sendiri memiliki kepanjangan &lt;i&gt;Personal Digital Asisstant&lt;/i&gt; dan menggunakan sistem operasi Windows Phone. Ponsel pintar ini sanggup diajak berkomunikasi selama 3,5-4 jam. Sementara waktu tunggunya diklaim sanggup hingga 150-200 jam.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;4. Nokia Symbian.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Nokia Symbian bisa dibilang “Nokia” yang dikenal pada tahun 2005–2010-an. Ponsel ini memiliki banyak tipe seperti Nokia 3650, 6600, N-Gage, N70, dan lainnya. Harganya beragam sesuai dengan tipe dan waktu keluarannya. Fitur-fiturnya juga semakin lengkap, seperti &lt;i&gt;multitasking&lt;/i&gt;, bermain &lt;i&gt;game&lt;/i&gt;, internet, &lt;i&gt;musik player&lt;/i&gt;, perekam video, bahkan mengedit file Microsoft Word.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;5. BlackBerry.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Smartphone&lt;/i&gt; ini terkenal dengan aplikasi &lt;i&gt;chatting-&lt;/i&gt;nya, yaitu &lt;i&gt;Blackberry Messenger&lt;/i&gt; (BBM). Gadget yang pertama diluncurkan adalah BlackBerry 5810 pada tahun 2002 oleh perusahan RIM yang merupakan perusahaan di bidang Pager. Ponsel ini sudah dilegkapi jaringan GSM dan GPRS namun ketika menelpon harus menggunakan &lt;i&gt;headset&lt;/i&gt;. Sampai akhirnya pada tahun 2009, BlackBerry makin terkenal karena mengelurkan tipe-tipe baru dengan spesifikasi yang lebih lengkap dan paket internet yang terjangkau.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;6. Android.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Android merupakan sistem operasi berbasis Linux yang dikembangkan oleh Android Inc dan dibeli Google pada tahun 2005. Awalnya Android dikembangkan sebagai sistem operasi kamera digital namun, beralih pada ponsel agar mencapai pasar lebih luas. Kemudian dinamai Sooner dengan desain awalnya mirip dengan BlackBerry dengan &lt;i&gt;keyboard&lt;/i&gt; QWERTY tanpa &lt;i&gt;touch screen&lt;/i&gt;. Seiring berjalanya waktu, Sooner didesain ulang sehingga menjadi layar sentuh. Kemunculan android pun tidak langsung tenar seperti BlackBerry dengan BBM nya. Pada tahun 2008, produk &lt;i&gt;smartphone&lt;/i&gt; Android pertama diluncurkan dengan nama HTC Dream yang dikenal juga dengan nama G1. Dan terus berkembang sampai sekarang.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;7. Iphone.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Pada tahun 2007, Steve Jobs menggabungkan 3 produk luar biasa yaitu; iPod, telepon seluler, dan perangkat komunikasi internet ke dalam satu produk bernama iPhone. Ponsel pertama ini masih belum mendukung 3G, namun memiliki segudang kelebihan seperti &lt;i&gt;multitouch&lt;/i&gt; tanpa stylus, singkronasi dengan iTunes, &lt;i&gt;multitasking&lt;/i&gt;, dan mampu memutar film berdurasi panjang. perangkat lunaknya adalah ios dan dianggap &lt;i&gt;smartphone&lt;/i&gt; premium karena harga dan kualitasnya yang terbilang mahal.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;8. Windows Phone.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Setelah Symbian kian redup pada akhir tahun 2010, dan muncul &lt;i&gt;smartphone&lt;/i&gt; yang menggandeng Android dan Ios, Microsoft akhirnya masuk ke sistem operasi &lt;i&gt;smartphone&lt;/i&gt;. Windows Phone pertama diluncurkan pada Februari 2010. Kemudian Microsoft menjalin kerja sama dengan Nokia untuk menjadi sistem operasinya menggantikan Symbian. Produk Windows Phone yang muncul pertama kali dan masuk ke pasar Indonesia pada than 2015 adalah Nokia Lumia 800 dan Nokia Lumia 710 dengan &lt;i&gt;touchscreen&lt;/i&gt; dan berbagai aplikasi.&lt;/p&gt;', 3),
(33, 'Sejarah Framework UI KIT Bootstrap', '2022-05-31', '629caa21525b8bootstrap.png', '&lt;p&gt;&lt;strong&gt;Bootstrap&lt;/strong&gt; adalah kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web. Kerangka kerja ini berisi templat desain berbasis HTML dan CSS untuk tifografi, formulir, tombol, navigasi, dan komponen antarmuka lainnya, serta juga ekstensi opsional Javascript. Tidak seperti kebanyakan kerangka kerja web lainnya, kerangka kerja ini hanya fokus pada pengembangan Frontend saja.&lt;/p&gt;&lt;p&gt;Bootstrap, awalnya bernama Twitter Blueprint, dikembangkan oleh Mark Otto dan Jacob Thornton di &lt;a href=&quot;https://id.wikipedia.org/wiki/Twitter&quot;&gt;Twitter&lt;/a&gt; sebagai kerangka kerja untuk mendorong konsistensi di perangkat internal yang sesuai. Sebelum Bootstrap, berbagai &lt;a href=&quot;https://id.wikipedia.org/wiki/Pustaka_(perangkat_lunak)&quot;&gt;pustaka&lt;/a&gt; sudah banyak digunakan untuk pengembangan antarmuka, yang menyebabkan ketidak-konsistenan dan beban pemeliharaan yang berat. Menurut Mark Otto, pengembang &lt;a href=&quot;https://id.wikipedia.org/wiki/Twitter&quot;&gt;Twitter&lt;/a&gt;:&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&quot;Sebuah grup developer super kecil dan juga aku telah bersama-sama untuk mendesain dan membangun perangkat internal baru dan melihat kesempatan untuk melakukan hal yang lebih banyak lagi. Melalui proses itu, kami melihat bahwa kami sedang membangun sesuatu yang lebih substansial dari perangkat internal lainnya. Beberapa bulan kemudian, kami menghasilkan sebuah versi paling awal dari Bootstrap, sebagai sebuah cara untuk berbagi pola desain yang lazim dan dan aset-aset perusahaan.&quot;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;Setelah beberapa bulan pengembangan oleh sebuah kelompok kecil, banyak pengembang di Twitter mulai memberikan kontribusi untuk proyek ini sebagai bagian dari &lt;i&gt;Hack Week&lt;/i&gt;, sebuah pekan ala &lt;a href=&quot;https://id.wikipedia.org/wiki/Hackathon&quot;&gt;hackathon&lt;/a&gt; untuk tim pengembangan Twitter. Nama itu diganti dari Twitter Blueprint menjadi Bootstrap, dan dirilis sebagai proyek sumber terbuka pada 19 Agustus 2011.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-v1-release-5&quot;&gt;[5]&lt;/a&gt; Hal ini terus dipertahankan oleh Mark Otto, Jacob Thornton, dan sekelompok kecil pengembang inti, serta sejumlah besar komunitas dari para kontributor.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-about-6&quot;&gt;[6]&lt;/a&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Bootstrap 2 dan 3&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Pada 31 Januari 2012, Bootstrap 2 dirilis, yang menambahkan sistem &lt;i&gt;layout&lt;/i&gt; dua belas kolom &lt;i&gt;grid&lt;/i&gt; yang &lt;a href=&quot;https://id.wikipedia.org/wiki/Desain_web_responsif&quot;&gt;responsif&lt;/a&gt;, dukungan &lt;i&gt;built-in&lt;/i&gt; untuk Glyphicons, beberapa komponen baru, serta perubahan dari beberapa komponen yang sudah ada.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-v2-release-7&quot;&gt;[7]&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Pada 19 Agustus 2013, Bootstrap 3 dirilis, yang didesain ulang komponennya untuk menggunakan desain flat, dan pendekatan &lt;a href=&quot;https://id.wikipedia.org/wiki/Desain_web_responsif&quot;&gt;&lt;i&gt;mobile-first&lt;/i&gt;&lt;/a&gt;.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-v3-release-8&quot;&gt;[8]&lt;/a&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Bootstrap 4&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Pada 29 Oktober 2014, Mark Otto mengumumkan bahwa Bootstrap 4 sedang dalam pengembangan.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-v3.3.0-release-9&quot;&gt;[9]&lt;/a&gt; Versi alfa pertama dari Bootstrap 4 dirilis pada 19 Agustus 2015.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-v4.0.0-alpha-release-10&quot;&gt;[10]&lt;/a&gt; Pada 6 September 2016, Mark menghentikan pengerjaan Bootstrap 3 dalam rangka untuk meluangkan waktu untuk pengerjaan Bootstrap 4. Sejauh ini, sudah lebih dari 17.500 &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=Kommit_(kendali_versi)&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;kommit&lt;/a&gt; yang telah dibuat untuk basis kode Bootstrap 4. Versi beta pertama dirilis pada 10 Agustus 2017.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-v4.0.0-beta-release-11&quot;&gt;[11]&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Versi stabil dari Bootstrap 4 yang dirilis pada 18 Januari 2018,&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-12&quot;&gt;[12]&lt;/a&gt; mayoritas merupakan tulisan ulang dari Bootstrap 3. Perubahan yang signifikan di antaranya:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Peralihan dari &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=Less_(bahasa_stylesheet)&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;Less&lt;/a&gt; menuju &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=Sass_(bahasa_stylesheet)&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;Sass&lt;/a&gt;.&lt;/li&gt;&lt;li&gt;Peluncuran but ulang untuk normalisasi css.&lt;/li&gt;&lt;li&gt;Menghapus dukungan peramban web &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=Internet_Explorer_8&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;IE8&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Internet_Explorer_9&quot;&gt;IE9&lt;/a&gt;, dan iOS 6.&lt;/li&gt;&lt;li&gt;Penambahan dukungan flexbox dan menghapus dukungan komponen non-flexbox.&lt;/li&gt;&lt;li&gt;Penambahan kustomisasi pilihan navigasi.&lt;/li&gt;&lt;li&gt;Penambahan utilitas untuk pemberian ruangan dan ukuran yang responsif.&lt;/li&gt;&lt;li&gt;Beralih dari &lt;a href=&quot;https://id.wikipedia.org/wiki/Piksel&quot;&gt;piksel&lt;/a&gt; ke &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=Em_(tipografi)&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;em&lt;/a&gt;.&lt;/li&gt;&lt;li&gt;Meningkatkan ukuran fon global dari 14px menjadi 16px.&lt;/li&gt;&lt;li&gt;Menghapus panel, &lt;a href=&quot;https://id.wikipedia.org/wiki/Keluku&quot;&gt;keluku&lt;/a&gt;, dan juga komponen-komponen yang mendukung elemen &lt;i&gt;cards&lt;/i&gt;.&lt;/li&gt;&lt;li&gt;Menghapus fon ikon Glyphicons.&lt;/li&gt;&lt;li&gt;Menghapus komponen pembuat halaman (&lt;i&gt;pager&lt;/i&gt;).&lt;/li&gt;&lt;li&gt;Menambahkan sejumlah besar utilitas &quot;class&quot;.&lt;/li&gt;&lt;li&gt;Memperbaiki perancangan formulir.&lt;/li&gt;&lt;li&gt;Memperbaiki tombol dan dropdown.&lt;/li&gt;&lt;li&gt;Memperbaiki objek media dan &quot;class&quot; untuk gambar.&lt;/li&gt;&lt;li&gt;Penulisan ulang hampir semua komponen, plugin &lt;a href=&quot;https://id.wikipedia.org/wiki/JQuery&quot;&gt;jQuery&lt;/a&gt;, dan dokumentasi.&lt;/li&gt;&lt;/ul&gt;&lt;h4&gt;&lt;strong&gt;Bootstrap 5&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Bootstrap 5 adalah versi baru Bootstrap yang akan datang. Perubahan besar termasuk:&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-13&quot;&gt;[13]&lt;/a&gt;&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-14&quot;&gt;[14]&lt;/a&gt;&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-15&quot;&gt;[15]&lt;/a&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Menghapus jQuery dari komponen dan menggunakan vanilla JavaScript.&lt;/li&gt;&lt;li&gt;Menulis ulang komponen &lt;i&gt;grid&lt;/i&gt; untuk mendukung fitur kolom yang ditempatkan di luar baris dan &lt;i&gt;gutter&lt;/i&gt; (ruang antar kolom) yang responsif.&lt;/li&gt;&lt;li&gt;Migrasi perangkat lunak dokumentasi dari &lt;a href=&quot;https://id.wikipedia.org/wiki/Jekyll_(perangkat_lunak)&quot;&gt;Jekyll&lt;/a&gt; ke &lt;a href=&quot;https://id.wikipedia.org/wiki/Hugo_(perangkat_lunak)&quot;&gt;Hugo&lt;/a&gt;.&lt;/li&gt;&lt;li&gt;Menghapus dukungan peramban web &lt;a href=&quot;https://id.wikipedia.org/wiki/Internet_Explorer_10&quot;&gt;IE10&lt;/a&gt;.&lt;/li&gt;&lt;li&gt;Memindahkan infrastruktur pengujian dari &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=QUnit&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;QUnit&lt;/a&gt; ke &lt;a href=&quot;https://id.wikipedia.org/w/index.php?title=Jasmine_(kerangka_kerja_pengujian_JavaScript)&amp;amp;action=edit&amp;amp;redlink=1&quot;&gt;Jasmine&lt;/a&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;h4&gt;Fitur-fitur&lt;/h4&gt;&lt;p&gt;Bootstrap 3 mendukung versi terbaru &lt;a href=&quot;https://id.wikipedia.org/wiki/Google_Chrome&quot;&gt;Google Chrome&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Firefox&quot;&gt;Firefox&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Internet_Explorer&quot;&gt;Internet Explorer&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Opera_(peramban_web)&quot;&gt;Opera&lt;/a&gt;, dan &lt;a href=&quot;https://id.wikipedia.org/wiki/Safari_(peramban_web)&quot;&gt;Safari&lt;/a&gt; (kecuali pada Windows). Selain itu mendukung kembali IE8 dan &lt;a href=&quot;https://id.wikipedia.org/wiki/Firefox&quot;&gt;Firefox&lt;/a&gt; Extended Support Release (ESR) terbaru.&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-supported-browsers-16&quot;&gt;[16]&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Sejak versi 2.0, Bootstrap mendukung &lt;a href=&quot;https://id.wikipedia.org/wiki/Desain_web_responsif&quot;&gt;desain web responsif&lt;/a&gt;. Ini berarti tata letak halaman web secara dinamis dapat menyesuaikan dengan mempertimbangkan karakteristik dari perangkat yang digunakan (desktop, tablet, ponsel).&lt;/p&gt;&lt;p&gt;Dimulai dari versi 3.0, Bootstrap mengadopsi filosofi desain &quot;&lt;a href=&quot;https://id.wikipedia.org/wiki/Desain_web_responsif&quot;&gt;&lt;i&gt;mobile-first&lt;/i&gt;&lt;/a&gt;&quot;, menekankan pada desain responsif secara baku.&lt;/p&gt;&lt;p&gt;Versi 4.0 menambahkan dukungan Sass dan flexbox.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Penggunaan ulang komponen-komponen&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Selain elemen HTML reguler, Bootstrap juga berisi elemen antarmuka yang umum digunakan. Komponen-komponen tersebut diimplementasikan dalam bentuk &quot;class&quot; CSS, yang harus diaplikasikan dalam elemen HTML tertentu pada halaman situs web.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Komponen-komponen JavaScript&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Bootstrap dilengkapi dengan beberapa komponen JavaScript dalam bentuk plugin &lt;a href=&quot;https://id.wikipedia.org/wiki/JQuery&quot;&gt;jQuery&lt;/a&gt;. Mereka menyediakan tambahan elemen antarmuka untuk pengguna seperti kotak dialog, &lt;i&gt;tooltips&lt;/i&gt;, dan &lt;i&gt;carousels&lt;/i&gt;. Mereka juga memperluas fungsi dari beberapa elemen antarmuka yang sudah ada, termasuk misalnya sebuah fungsi &lt;i&gt;auto-complete&lt;/i&gt; untuk bidang input. Di versi 1.3,&lt;a href=&quot;https://id.wikipedia.org/wiki/Bootstrap_(kerangka_kerja)#cite_note-17&quot;&gt;[17]&lt;/a&gt; plugin JavaScript berikut ini didukung oleh Bootstrap: Modal, Dropdown, Scrollspy, Tab, Tooltip, Popover, Alert, Button, Collapse, Carousel dan Typeahead.&lt;/p&gt;', 1),
(34, 'Telepon Umum Primadona yang Kini Dilupa', '2022-06-06', '629e0a6f5bf22teleponumum.jpg', '&lt;p&gt;&lt;strong&gt;Telepon umum&lt;/strong&gt; bermula saat pertama kali ditemukan oleh William Gray tahun 1889 dan berkembang pesat pada tahun 1892, hingga jumlahnya mencapai 81.000 buah di Amerika Serikat. Telepon umum sendiri mulai aa di Indonesia sejak tahun 1980-an, ide itu berasal dari para keryawan perumtel yang baru saja pulang dari perjalanan dinas mereka di London. Mereka sangat kagum melihat baiknya layanan dan ketersediaan telepon umum di negara itu yang mana pada akhirnya menginspirasi mereka untuk menerapkannya di Indonesia.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://d220hvstrn183r.cloudfront.net/attachment/80719803167487117782&quot; alt=&quot;popup image&quot;&gt;&lt;/figure&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Ide awalnya adalah mereka mengusulkan agar perumtel membuat telepon umum berjenis kartu. Tapi gagasan itu diragukan oleh Direktur Umum Perumtel saat itu Willy Moenandir. Pasalnya, ketersediaan dan persebaran kartu akan menjadi PR baru bagi perusahaan mereka. Selain itu tentu saja masyarakat kita yang masih awam dengan telepon umum.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Akhirnya sebagai solusi pada tahun 1981 Perumtel meluluskan ide mereka membuat telepon umum namun dengan jenis yang berbeda. Bukan menggunakan kartu melainkan koin. Fenomena telepon umum mencapai puncak di dekade 1980 hingga 1990-an. Kala itu pemandangan puluhan orang mengantre di telepon umum adalah hal yang biasa. Bahkan lantaran banyaknya telepon umum yang terpasang. Telkom sampai mempunyai unit khusus untuk mengurusi segala keperluan telepon umum.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Namun kisah telepon umum itu kini sudah berhenti.Telepon umum di kawasan Gelora Bung Karno misalnya,perangkat dan tudungnya masih ada.Namun sudah tertutupi oleh ilalang.Bahkan beberapa telepon umum malah bernasib lebih buruk.Seperti di kawasan Senen dan Bendungan Hilir.Telepon umum disana hanya tersisa tudungnya saja, sedangkan gagang telepon hilang entah kemana.Selain karena tergerus oleh zaman, telepon umum semakin tersingkir karena tindakan vandalisme.Ada yang ditempeli permen karet,dimasukan koin yang dilubangi kemudian ditarik kembali,hingga koin yang dicuri.Itu semua akhirnya membuat cerita telepon umum harus berhenti pada masa kini.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://d220hvstrn183r.cloudfront.net/attachment/64211511090016071664&quot; alt=&quot;popup image&quot;&gt;&lt;/figure&gt;', 7),
(35, 'Perkembangan Android dari Masa ke Masa', '2022-06-06', '629e0da38c8abandroid.png', '&lt;p&gt;&lt;strong&gt;Android&lt;/strong&gt; merupakan sistem operasi dengan basis Kernel Linux yang banyak digunakan pada smartphone dan tablet.&lt;/p&gt;&lt;p&gt;Google merancangnya demi mendukung kinerja perangkat alat elektronik dengan sentuhan, ketukan ataupun gesekan.&lt;/p&gt;&lt;p&gt;Sedangkan sistem operasi berupa aplikasi dalam perangkat elektronik yang mengatur keseluruhan sumber daya. Seperti manajemen memori, antarmuka tampilan, aplikasi dan lain sebagainya.&lt;/p&gt;&lt;p&gt;Pembuat dan pengembang perangkat lunak bebas menggunakan, memodifikasi, sampai mendistribusikan Android . Termasuk para pembuat aplikasi yang membuat Android mempunyai jutaan aplikasi siap unduh di google play store.&lt;/p&gt;&lt;p&gt;Lantas bagaimana sejarah Android sampai sekarang?&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h4&gt;Sejarah Android&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://asset.kompas.com/crops/AeUtIZyKrMdukHIGMig592Phw2Q=/165x0:1245x720/750x500/data/photo/2020/02/21/5e4fc04abaecd.jpg&quot; alt=&quot;Android 11 Sudah Bisa Dicoba, Apa Saja Fiturnya? Halaman all - Kompas.com&quot;&gt;&lt;/figure&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Awalnya Android dibuat sebagai pendukung perangkat kamera digital supaya terhubung langsung dengan internet.&lt;/p&gt;&lt;p&gt;Karena pangsa pasar tidak terlalu besar, maka selanjutnya Android dikembangkan dalam perangkat mobile.&lt;/p&gt;&lt;p&gt;Sementara pada saat itu keberadaan Symbian dan Windows Mobile adalah sebagai pemain utama.&lt;/p&gt;&lt;p&gt;Sejarah perkembangan Android dimulai tahun 2003 saat Andy Rubin, Rich Miner, Chris White dan NIck Sears mendirikan Android, Inc.&lt;/p&gt;&lt;p&gt;Sebuah perusahaan besar di Palo Alto, California yang kemudian dipinang oleh Google pada tanggal 17 Agustus 2005.&lt;/p&gt;&lt;p&gt;Di bawah naungan Google, Android menghilang dan tidak melahirkan apapun sampai pertengahan tahun 2008.&lt;/p&gt;&lt;p&gt;Hingga pada 22 Oktober 2008, HTC Dream diluncurkan sebagai ponsel seluler komersial pertama yang berbasis Android.&lt;/p&gt;&lt;p&gt;Dua tahun setelahnya, ponsel pintar seri Nexus One diluncurkan oleh Google dengan bantuan HTC selama proses pembuatan.&lt;/p&gt;&lt;p&gt;Hingga akhirnya melahirkan berbagai brand dari OEM yang berbeda seperti Asus, Samsung, LG dan lain sebagainya.&lt;/p&gt;&lt;p&gt;Selanjutnya perangkat Android mulai berkembang pesat dan menenggelamkan para pesaingnya.&lt;/p&gt;&lt;p&gt;Bersama dengan perubahan, perkembangan dan perbaikan fitur yang membuat performa Android lebih optimal.&lt;/p&gt;&lt;p&gt;Berbagai versi Android terus berkembang sejak kemunculannya di tahun 2008 hingga sekarang.&lt;/p&gt;&lt;p&gt;Tercatat smartphone pertama yang menggunakan sistem operasi Android adalah HTC Dream alias HTC G1 atau T-Mobile G1 (AS).&lt;/p&gt;&lt;p&gt;Nah untuk Android pertama di Indonesia sebenarnya tidak berbeda jauh dengan kemunculan smartphone HTC Dream, tetapi karena peminatnya tidak begitu banyak maka kurang terekspose.&lt;/p&gt;&lt;p&gt;Baru pada zaman generasi Samsung Galaxy versi pertama yang menggunakan OS Android mulai banyak diketahui orang, tetapi saat itu masih kalah dengan pengguna BlackBerry OS.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;1. Android Astro 1.0 (Alpha)&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Versi Android 1.0 ini dirilis pada 23 September 2008 dengan nama Alpha yang digunakan pada ponsel jenis HTC Dream.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;2. Android Bender 1.1 (Beta)&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Pada versi 1.1 rilisan 9 Februari 2009, google play store meluncur dengan nama Android market.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;3. Android Cupcake 1.5&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Pada 27 April 2009, Android versi 1.5 dengan nama cupcake dirilis secara komersil bersama fitur on-screen keyboard.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;4. Android Donut 1.6&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Android merilis versi donut 1.6 pada 15 September 2009 dengan mendukung teknologi CDMA/EVDO, 802.1 x, VPNs.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;5. Android Eclair 2.0 – 2.1&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Kemunculan Eclair 2.0 – 2.1 pada 26 Oktober 2009, menggeser fungsi peta konvensional dengan fitur navigasi Google maps.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;6. Android Froyo 2.2&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Versi froyo atau &lt;i&gt;frozen yoghurt&lt;/i&gt; rilis pada 20 Mei 2010 dengan berbagai fitur perbaikan pada sistem yang sudah ada.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;7. Android Gingerbread 2.3&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Gingerbread 2.3 rilis pada 6 Desember 2010 dengan mengutamakan beberapa pembaharuan.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;8. Android Honeycomb 3.0/3.1&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Android meluncurkan versi honeycomb 3.0/3.1 pada 22 Februari 2011 untuk penggunaan OS Android pada tablet.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;9. Android Ice Cream Sandwich 4.0&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Fitur yang ada pada versi tablet dimasukkan dalam Ice Cream Sandwich 4.0 yang diluncurkan pada 19 Oktober 2011.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;10. Android Jelly Bean 4.1/ 4.2/ 4.3&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Google now yang berfungsi untuk &lt;i&gt;voice assistant &lt;/i&gt;diperkenalkan bersama dengan peluncuran versi Jelly Bean 4.1 di tahun 2012.&lt;/p&gt;&lt;p&gt;Sedangkan fitur &lt;i&gt;photo sphere, daydream&lt;/i&gt; dan lain-lain ada di versi 4.2, yang mana semua versi dimutakhirkan pada versi 4.3.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;11. Android Kitkat 4.4&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Key Lime Pie atau kitkat 4.4 yang rilis pada 31 Oktober 2013 hanya akan berjalan optimal pada perangkat dengan RAM minimal 512 MB.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;12. Android Lollipop 5.0&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;12 November 2014 adalah waktu peluncuran Lollipop 5.0 yang membuat perubahan pada desain &lt;i&gt;User Interface&lt;/i&gt;.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;13. Android Marshmallow 6.0&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Marshmallow 6.0 muncul bersama fitur canggih seperti search bar, sensor sidik jari dan sebagainya pada 5 Oktober 2015.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;14. Android Nougat 7.0&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Nougat 7.0 membuat perubahan besar sejak muncul pada 23 Agustus 2016 dengan 63 emoji baru dan multi-window.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;15. Android Oreo 8.0&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Oreo 8.0 hadir pada 21 Agustus 2017 dengan fitur-fitur yang &lt;i&gt;multitasking&lt;/i&gt; serta penampilan UI yang lebih rapi.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;16. Android Pie 9.0&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Pie 9.0 dirilis pada 6 Agustus 2018 dengan membawa smart reply, digital wellbeing, adaptive battery dan lain-lain.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;17. Android 10&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Salah satu alasan versi ke 10 dinamakan Android 10 dikarenakan tidak adanya nama makanan yang berawalan Q.&lt;/p&gt;&lt;p&gt;Untuk versi Android 10 keatas sudah tidak menggunakan nama-nama makanan seperti versi sebelumnya.&lt;/p&gt;&lt;p&gt;Android versi 10 diluncurkan pada 3 September 2019, fitur barunya berupa navigasi layar utama, izin untuk akses media, akses ke background dll.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;18. Android 11&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Android 11 diluncurkan pada tanggal 8 September 2020 dengan membawa fitur yang lebih lengkap dari generasi sebelumnya.&lt;/p&gt;&lt;p&gt;Contoh fitur yang dimilikinya seperti chat bubbles, perekaman layar, notifications, kontrol izin dan sebagainnya.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;19. Android 12&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Android 12 resmi meluncur pada tanggal 4 Oktober 2021, setelah pertama kali diumumkan Google pada tanggan 18 Februari 2021.&lt;/p&gt;&lt;p&gt;Fitur baru yang dihadirkan dalam versi Android terbaru ini seperti kemudahan berbagi WiFi, support gambar AVIF, Material You, tangkapan layar bergulir, mode satu tangan, zoom area, extra dim dan masih banyak lainnya.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;20. Android 12L&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Android 12L direncanakan meluncur pada awal tahun 2022, updatenya khusus untuk perangkat smartphone lipat, tablet, layar besar dan chromebook.&lt;/p&gt;&lt;p&gt;Versi Android 12L ini akan lebih mudah menyesuaikan dengan layar pengguna yang lebih besar.&lt;/p&gt;&lt;p&gt;Untuk detail lengkapnya kita tunggu saja sampai versi 12L ini diluncurkan resmi ke publik.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Untuk Android versi terbaru biasanya khusus untuk smartphone keluaran terbaru, untuk smartphone keluaran lama biasanya terbatas sampai versi Android tertentu.&lt;/strong&gt;&lt;/p&gt;', 3),
(36, 'awdwdwadw', '2015-06-09', 'nophoto.png', '&lt;p&gt;wadwdwad&lt;/p&gt;', 4),
(37, 'awdwdawdwadaefefe', '2022-06-09', 'nophoto.png', '&lt;p&gt;wadwdwda&lt;/p&gt;', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `gambar`, `id_level`) VALUES
(5, 'admin', 'admin@ammarbahtiar.com', '$2y$10$.x2x78qxnHj/j3UkzLGSBuiDJfPFOkwCPJrSz9eolED9cBT0cFm6i', '62a13f1a3e433logo.png', 2),
(19, 'user', 'user@gmail.com', '$2y$10$hWzv8Z24rOIKg1pnvhz0wOVL2FCATq7NiaVmt6aicfkTJuV49qMIW', 'nophoto.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id_love`),
  ADD KEY `id_sejarah` (`id_sejarah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `sejarah_teknologi`
--
ALTER TABLE `sejarah_teknologi`
  ADD PRIMARY KEY (`id_sejarah`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `love`
--
ALTER TABLE `love`
  MODIFY `id_love` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `sejarah_teknologi`
--
ALTER TABLE `sejarah_teknologi`
  MODIFY `id_sejarah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `love`
--
ALTER TABLE `love`
  ADD CONSTRAINT `love_ibfk_1` FOREIGN KEY (`id_sejarah`) REFERENCES `sejarah_teknologi` (`id_sejarah`) ON UPDATE CASCADE,
  ADD CONSTRAINT `love_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sejarah_teknologi`
--
ALTER TABLE `sejarah_teknologi`
  ADD CONSTRAINT `sejarah_teknologi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
