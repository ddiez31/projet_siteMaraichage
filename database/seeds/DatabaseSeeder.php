<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(VegetablesTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(SeasonVegetableTableSeeder::class);
        $this->call(MarketsTableSeeder::class);
    }
}
