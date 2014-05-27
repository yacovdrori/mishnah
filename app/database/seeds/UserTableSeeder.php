// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'firstname'     => 'yacov',
			'lastname' => 'drori',
			'email'    => 'yacov@drori.org',
			'password' => Hash::make('yacyac'),
		));
	}

}
