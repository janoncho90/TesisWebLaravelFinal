<?php

use Illuminate\Database\Seeder;

class RolTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('rols')->insert([
            'type' => 'admin',
        ]);

        DB::table('rols')->insert([
            'type' => 'miembro',
        ]);

        DB::table('rols')->insert([
            'type' => 'repartidor',
        ]);
        //
    }
}
