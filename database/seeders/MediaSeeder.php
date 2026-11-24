<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        $medias = [
            [
                'title' => 'Attack on Titan',
                'jenis' => 'Anime',
                'genre' => 'Action, Drama, Fantasy',
                'tahun' => 2013,
                'description' => 'Kisah perjuangan manusia untuk bertahan hidup dari serangan Titan.',
            ],
            [
                'title' => 'Demon Slayer',
                'jenis' => 'Anime',
                'genre' => 'Action, Adventure, Fantasy',
                'tahun' => 2019,
                'description' => 'Tanjiro berusaha menyelamatkan adiknya dan membasmi para iblis.',
            ],
            [
                'title' => 'Naruto',
                'jenis' => 'Anime',
                'genre' => 'Action, Adventure, Fantasy',
                'tahun' => 2002,
                'description' => 'Perjalanan Naruto Uzumaki untuk menjadi Hokage dan mendapatkan pengakuan dari orang-orang di desanya.',
            ],
            [
                'title' => 'One Piece',
                'jenis' => 'Anime',
                'genre' => 'Adventure, Action, Comedy',
                'tahun' => 1999,
                'description' => 'Petualangan Monkey D. Luffy untuk menemukan harta karun One Piece.',
            ],
            [
                'title' => 'Jujutsu Kaisen',
                'jenis' => 'Anime',
                'genre' => 'Action, Supernatural, Fantasy',
                'tahun' => 2020,
                'description' => 'Yuji Itadori terlibat dalam dunia penyihir jujutsu dan kutukan.',
            ],
            [
                'title' => 'Interstellar',
                'jenis' => 'Film',
                'genre' => 'Sci-Fi, Adventure, Drama',
                'tahun' => 2014,
                'description' => 'Sekelompok astronaut melakukan perjalanan untuk mencari planet baru bagi manusia.',
            ],
            [
                'title' => 'Avengers: Endgame',
                'jenis' => 'Film',
                'genre' => 'Action, Adventure, Sci-Fi',
                'tahun' => 2019,
                'description' => 'Para Avengers berusaha mengembalikan kehidupan setelah kehancuran akibat Thanos.',
            ],
            [
                'title' => 'Harry Potter',
                'jenis' => 'Film',
                'genre' => 'Fantasy, Adventure',
                'tahun' => 2001,
                'description' => 'Petualangan Harry Potter dalam mempelajari dunia sihir dan menghadapi Voldemort.',
            ],
            [
                'title' => 'Stranger Things',
                'jenis' => 'Series',
                'genre' => 'Drama, Horror, Sci-Fi',
                'tahun' => 2016,
                'description' => 'Sekelompok anak menghadapi kejadian misterius di kota Hawkins.',
            ],
            [
                'title' => 'The Hobbit',
                'jenis' => 'Film',
                'genre' => 'Fantasy, Adventure',
                'tahun' => 2012,
                'description' => 'Bilbo Baggins mengikuti perjalanan untuk merebut kembali kerajaan para kurcaci.',
            ],
            [
                'title' => 'The Lord of the Rings',
                'jenis' => 'Film',
                'genre' => 'Fantasy, Adventure, Drama',
                'tahun' => 2001,
                'description' => 'Perjalanan Frodo untuk menghancurkan cincin yang memiliki kekuatan besar.',
            ],
        ];

        foreach ($medias as $media) {
            Media::updateOrCreate(
                ['title' => $media['title']],
                $media
            );
        }
    }
}
