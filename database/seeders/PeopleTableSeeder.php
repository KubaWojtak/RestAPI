<?php

namespace Database\Seeders;

use App\Models\People;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(): void
    {

        DB::table('people')->delete();


        $faker = Factory::create();


        for ($i = 0; $i < 50; $i++) {
            People::create([
                'Name' => $faker->firstName,
                'LastName' => $faker->lastName,
                'telephoneNumber' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'country' => $faker->city,
            ]);
        }
    }
}