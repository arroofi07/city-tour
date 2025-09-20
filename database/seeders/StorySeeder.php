<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::create([
            'title' => 'Legenda Malin Kundang',
            'subtitle' => 'Yang Viral Sejak Dulu! 🔥',
            'description' => 'Plot twist yang paling ikonik dalam sejarah Minang! Cerita tentang Malin Kundang yang durhaka sama ibunya dan akhirnya dikutuk jadi batu, kisah ini sudah ada sejak berabad-abad lalu.

Real talk: Batu yang bentuknya kayak manusia ini masih eksis sampai sekarang dan jadi spot foto paling hits di Air Manis! Main character energy yang abadi banget kan? ✨',
            'image_path' => 'stories/vABIp4XxZHAIm1Fg8p5YenzHVFh42nplg2wIK9Cz.jpg',
            'is_active' => true,
            'order' => 1,
        ]);

        Story::create([
            'title' => 'Cerita Air Manis',
            'subtitle' => 'Pantai dengan Sejuta Pesona 🌊',
            'description' => 'Air Manis bukan cuma tentang Malin Kundang aja loh! Pantai ini punya vibe yang beda banget dari pantai-pantai lain di Sumatera Barat.

Dengan sunset yang breathtaking dan atmosphere yang chill abis, tempat ini udah jadi comfort zone buat banyak orang. Perfect banget buat healing time atau quality time sama orang tersayang! 💙',
            'image_path' => 'stories/YawjawWjmEAMdveAxn4acD6OI2LK05CgY7LWnKBj.jpg',
            'is_active' => true,
            'order' => 2,
        ]);
    }
}
