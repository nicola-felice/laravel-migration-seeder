<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
        $new_package = new Package();
        $new_package->city = $faker->word();
        $new_package->activities = $faker->text(100);
        $new_package->hotel = $faker->word(2);
        $new_package->price = $faker->randomNumber(5, false);
        $new_package->people = $faker->randomDigitNotNull();
        $new_package->duration = $faker->randomDigitNotNull();
        $new_package->save();
        }
    }
}
