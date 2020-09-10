<?php

use Illuminate\Database\Seeder;
use App\Album;
use Faker\Generator as Faker;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, Album $n_album_test)
    {
        for ($i=0; $i < $n_album_test; $i++) {
            $new_album = new Album();
            $new_album->title = $faker->sentence(2);
            $new_album->artist = $faker->name;
            $new_album->year = $faker->year();

            $new_album->save();
        }
    }
}
