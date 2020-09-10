<?php

use Illuminate\Database\Seeder;
use App\Artist;
use Faker\Generator as Faker;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $new_artist = new Artist();
            $new_artist->name = $faker->name;
            $new_artist->nationality = $faker->randomElement([
                'italian',
                'english',
                'american',
                'spanish',
                'french',
            ]);;
            $new_artist->date_of_birth = $faker->date('d M Y');

            $new_artist->save();
        }
    }
}
