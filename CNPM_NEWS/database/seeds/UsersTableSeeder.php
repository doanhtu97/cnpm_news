<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 10;$i++)
        {
        	DB::table('Users')->insert(
	        	[
	        		'name' => 'user_'.$i,
	            	'email' => 'user_'.$i.'@gmail.com',
	            	'password' => bcrypt('123456'),
	            	'level'=> 1,
	            	'created_at' => new DateTime(),
	        	]
            );            
        }
        
        DB::table('Users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'level'=> 0,
                'created_at' => new DateTime(),
            ]
        );
    }
}
