<?php

use Illuminate\Database\Seeder;
use App\Song;
use Faker\Generator as Faker;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            for ($j=0; $j < 8; $j++) {
                $new_song = new Song();
                $new_song->title = $faker->sentence(3);
                $new_song->genre = $faker->randomElement([
                    'pop',
                    'jazz',
                    'blues',
                    'rock',
                    'country',
                    'reggae',
                    'classic',
                    'metal',
                    'emo',
                    'indie',
                ]);
                $new_song->album_id = $i + 1;

                $new_song->save();
            }
        }
    }
}
