<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('ManagerUserSeeder');
	}

}

class ManagerUserSeeder extends Seeder {

    public function run()
    {
        $managerUser = new \Manager\ManagerUser();

        $managerUser->username = 'admin';
        $managerUser->password = \Illuminate\Support\Facades\Hash::make('Admin123');
        $managerUser->email    = 'faisal@nascenia.com';
        $managerUser->name     = 'Mr. Manager';
        $managerUser->save();
    }

}