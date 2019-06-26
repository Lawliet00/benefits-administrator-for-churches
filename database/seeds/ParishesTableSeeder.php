<?php

use Illuminate\Database\Seeder;
use App\Parish;
class ParishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Parish::updateOrCreate([
			'name'=>'parroquia test',
		],
        []);
    }
}
