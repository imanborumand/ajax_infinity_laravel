<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
	use Illuminate\Support\Facades\DB;
	
	class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$faker = Faker::create();
		foreach (range(1,100) as $index) {
			\App\Article::insert([
										   'title' => $faker->text(50),
										   'body' => $faker->text(),
										   'created_at' => $faker->dateTime(),
									   ]);
		}
    }
}
