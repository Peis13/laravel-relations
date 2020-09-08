<?php

use Illuminate\Database\Seeder;
use App\Image;
use Faker\Generator as Faker;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 3; $i++) {
            $new_image = new Image();
            $new_image->cover = $faker->imageUrl();
            $new_image->album_id = $i + 1;

            $new_image->save();
        }
    }
}
