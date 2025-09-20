<?php

namespace Database\Seeders;

use App\Models\TouristSpot;
use Illuminate\Database\Seeder;

class TouristSpotSeeder extends Seeder
{
    public function run()
    {
        $spots = [
            [
                'name' => 'Pantai Padang',
                'description' => 'Pantai Padang adalah salah satu destinasi wisata paling terkenal di Sumatera Barat. Terletak di pusat kota Padang, pantai ini menawarkan pemandangan sunset yang memukau dengan latar belakang Samudera Hindia. Pengunjung dapat menikmati berbagai aktivitas seperti berenang, berselancar, atau sekadar bersantai di tepi pantai sambil menikmati angin sepoi-sepoi. Di sepanjang pantai terdapat berbagai warung makan yang menjual makanan khas Minang dan seafood segar. Pantai ini juga dilengkapi dengan fasilitas seperti tempat parkir yang luas, toilet umum, dan area bermain anak.',
                'short_description' => 'Pantai ikonik di pusat kota dengan sunset menawan dan kuliner seafood yang lezat',
                'image' => 'tourist-spots/main-3.jpg',
                'location' => 'Jl. Samudera, Padang',
                'price' => 0,
                'rating' => 4.5,
                'category' => 'pantai',
                'facilities' => ['Parkir Luas', 'Toilet Umum', 'Warung Makan', 'Area Bermain Anak', 'Spot Foto', 'Musholla'],
                'contact' => '0751-123456',
                'opening_hours' => '24 Jam',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Jembatan Siti Nurbaya',
                'description' => 'Jembatan Siti Nurbaya adalah ikon Kota Padang yang menghubungkan Kota Padang dengan Kecamatan Padang Selatan. Jembatan ini dinamai berdasarkan novel legendaris karya Marah Rusli. Dari atas jembatan, pengunjung dapat menikmati pemandangan Gunung Padang, muara Batang Arau, dan aktivitas nelayan. Pada malam hari, jembatan ini dihiasi lampu-lampu yang indah, menjadikannya spot foto favorit anak muda. Di sekitar jembatan terdapat taman dan area pejalan kaki yang nyaman untuk bersantai.',
                'short_description' => 'Jembatan ikonik dengan pemandangan indah dan kisah romantis legendaris',
                'image' => 'tourist-spots/main-6.jpg',
                'location' => 'Batang Arau, Padang Selatan',
                'price' => 0,
                'rating' => 4.3,
                'category' => 'budaya',
                'facilities' => ['Parkir', 'Area Pejalan Kaki', 'Spot Foto', 'Taman', 'Penerangan Malam'],
                'contact' => null,
                'opening_hours' => '24 Jam',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Pantai Air Manis',
                'description' => 'Pantai Air Manis terkenal dengan legenda Malin Kundang dan batu yang konon adalah wujud Malin Kundang yang dikutuk. Pantai ini memiliki pasir putih yang lembut dan ombak yang relatif tenang, cocok untuk berenang. Terdapat pulau kecil (Pulau Pisang Kecil) yang bisa dicapai dengan berjalan kaki saat air laut surut. Pantai ini juga menjadi spot favorit untuk melihat sunset. Fasilitas yang tersedia cukup lengkap dengan berbagai warung makan, penyewaan pelampung, dan gazebo untuk bersantai.',
                'short_description' => 'Pantai legendaris dengan Batu Malin Kundang dan pasir putih yang indah',
                'location' => 'Air Manis, Padang Selatan',
                'price' => 5000,
                'rating' => 4.6,
                'category' => 'pantai',
                'facilities' => ['Parkir', 'Toilet', 'Warung Makan', 'Gazebo', 'Penyewaan Pelampung', 'Musholla', 'Spot Foto'],
                'contact' => '0751-789012',
                'opening_hours' => '08:00 - 18:00',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Pasar Raya Padang',
                'description' => 'Pasar Raya Padang adalah pusat perdagangan tradisional terbesar di Sumatera Barat. Dibangun pada masa kolonial Belanda, pasar ini memiliki arsitektur yang unik dan bersejarah. Di sini pengunjung dapat menemukan berbagai produk khas Minang seperti rendang, keripik sanjai, kerupuk jangek, sulaman, songket, dan berbagai rempah-rempah. Pasar ini juga menjadi tempat yang tepat untuk merasakan kehidupan masyarakat lokal dan berinteraksi dengan pedagang yang ramah.',
                'short_description' => 'Pasar tradisional bersejarah dengan berbagai produk khas Minang',
                'location' => 'Jl. Pasar Raya, Padang Barat',
                'price' => 0,
                'rating' => 4.2,
                'category' => 'belanja',
                'facilities' => ['Parkir', 'Toilet', 'ATM', 'Food Court', 'Musholla'],
                'contact' => '0751-234567',
                'opening_hours' => '06:00 - 17:00',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Museum Adityawarman',
                'description' => 'Museum Adityawarman adalah museum budaya yang menyimpan koleksi benda-benda bersejarah Minangkabau. Bangunan museum berbentuk rumah gadang yang megah dengan ornamen khas Minang. Di dalam museum terdapat berbagai koleksi seperti pakaian adat, senjata tradisional, naskah kuno, dan berbagai artefak budaya Minangkabau. Museum ini menjadi tempat yang tepat untuk mempelajari sejarah dan budaya Minangkabau secara mendalam.',
                'short_description' => 'Museum budaya Minangkabau dalam bangunan rumah gadang yang megah',
                'location' => 'Jl. Diponegoro No. 10, Padang',
                'price' => 10000,
                'rating' => 4.4,
                'category' => 'budaya',
                'facilities' => ['Parkir', 'Toilet', 'Ruang Pameran', 'Taman', 'Spot Foto', 'Pemandu Wisata'],
                'contact' => '0751-31764',
                'opening_hours' => 'Selasa-Minggu: 08:00-15:30',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Pulau Sikuai',
                'description' => 'Pulau Sikuai adalah surga tropis yang terletak sekitar 45 menit perjalanan dengan speedboat dari Pelabuhan Muara Padang. Pulau ini memiliki pantai berpasir putih, air laut yang jernih, dan terumbu karang yang indah untuk snorkeling. Tersedia resort dan berbagai fasilitas wisata bahari seperti diving, jet ski, dan banana boat. Pulau ini cocok untuk liburan keluarga atau bulan madu dengan suasana yang tenang dan romantis.',
                'short_description' => 'Pulau tropis dengan pantai pasir putih dan aktivitas wisata bahari',
                'location' => 'Kepulauan Mentawai, Padang',
                'price' => 350000,
                'rating' => 4.8,
                'category' => 'pantai',
                'facilities' => ['Resort', 'Restoran', 'Water Sport', 'Snorkeling', 'Diving', 'Beach Bar', 'Spot Foto'],
                'contact' => '0751-456789',
                'opening_hours' => '08:00 - 17:00',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Taman Budaya Padang',
                'description' => 'Taman Budaya Padang adalah pusat kegiatan seni dan budaya di Sumatera Barat. Tempat ini sering menggelar pertunjukan seni tradisional Minang seperti tari piring, randai, dan saluang. Terdapat gedung pertunjukan modern, galeri seni, dan area terbuka untuk berbagai event budaya. Pengunjung dapat menyaksikan latihan seni tradisional atau mengikuti workshop untuk mempelajari kesenian Minang.',
                'short_description' => 'Pusat seni dan budaya dengan pertunjukan tradisional Minang',
                'location' => 'Jl. Ujung Gurun, Padang Barat',
                'price' => 0,
                'rating' => 4.3,
                'category' => 'budaya',
                'facilities' => ['Parkir', 'Gedung Pertunjukan', 'Galeri Seni', 'Toilet', 'Kantin', 'WiFi'],
                'contact' => '0751-34567',
                'opening_hours' => '09:00 - 21:00',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Bukit Nobita',
                'description' => 'Bukit Nobita adalah destinasi wisata alam yang hits di kalangan anak muda. Dari puncak bukit, pengunjung dapat menikmati pemandangan 360 derajat Kota Padang dan Samudera Hindia. Tempat ini terkenal sebagai spot foto instagramable dengan berbagai instalasi foto kreatif. Waktu terbaik berkunjung adalah saat sunrise atau sunset. Perjalanan menuju puncak cukup menantang namun pemandangan yang disajikan sangat worth it.',
                'short_description' => 'Bukit dengan pemandangan kota dan spot foto instagramable',
                'location' => 'Koto Tangah, Padang',
                'price' => 10000,
                'rating' => 4.5,
                'category' => 'gunung',
                'facilities' => ['Parkir', 'Warung', 'Spot Foto', 'Gazebo', 'Toilet'],
                'contact' => null,
                'opening_hours' => '05:00 - 18:00',
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($spots as $spot) {
            TouristSpot::create($spot);
        }
    }
}
