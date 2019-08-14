<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
		User::updateOrCreate([
			'name'=>'admin',
			'email'=>'admin@admin.com',
		],
        [
			'password'=>bcrypt('123456'),
			'email_verified_at'=>date("Y-m-d"),

        ]);
    }
}
