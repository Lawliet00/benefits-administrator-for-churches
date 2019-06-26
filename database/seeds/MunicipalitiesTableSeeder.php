<?php

use Illuminate\Database\Seeder;
use App\Municipality;
class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Municipality::updateOrCreate([
			'name'=>'municipio test',
		],
        []);
    }
}
