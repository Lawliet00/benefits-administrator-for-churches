<?php

use Illuminate\Database\Seeder;
use App\Denomination;

class DenominationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Denomination::updateOrCreate([
			'name'=>'Denomination test',
		],
        []);
    }
}
