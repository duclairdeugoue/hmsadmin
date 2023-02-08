<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"user_name" => "Deugoue Duclair",
				"user_email" => "duclairdeugoue@gmail.com",
				"user_role" => "admin",
				"user_password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"user_name" => "Tatchou Arthur",
				"user_email" => "arthurtatchou@gmail.com",
				"user_role" => "customer",
				"user_password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}
