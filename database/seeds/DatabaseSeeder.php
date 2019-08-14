<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DenominationsTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(ParishesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
    }
}
