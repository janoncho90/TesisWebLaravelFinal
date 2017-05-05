<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('users')->insert([
            'name' => 'admin',
            'lastname' =>'principal',
            'email' => 'clickcomida17@gmail.com',
            'nickname' => 'Click',
            'password' => password_hash ( 'clickcomida', PASSWORD_BCRYPT ),
            'rol_id'  => 1,
        ]);
        //
    }
}
