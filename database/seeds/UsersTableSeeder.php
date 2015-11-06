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
    	DB::table('users')->delete();

        User::create(array(
	        'first_name' => 'Wan Zulsarhan',
	        'last_name' => 'Wan Shaari',
	        'email' => 'wzs21@iastate.edu',
	        'student_id' => '858972114',
	        'password' => bcrypt('gundamseed21'),
	        'phone_number' => '+1(515)708-3630',
	        'photo_path' => 'image/user_858972114.jpg',
	        'is_admin' => 1,
	        'major' => 'Software Engineering',
	    ));

        User::create(array(  	  
			'first_name' => 'Ibtisam',
			'last_name' => 'Ostham',
			'email' => 'ibtisam@iastate.edu',
			'student_id' => '823770948',
			'password' => bcrypt('password'),
			'phone_number' => '+1(515)708-1744',
			'photo_path' => 'image/user_823770948.jpg',
	        'is_admin' => 1,
	        'major' => 'Electrical Engineering',
        ));

        User::create(array(  	  
			'first_name' => 'Mohamad Asyraf',
			'last_name' => 'Samsudin',
			'email' => 'asy@iastate.edu',
			'student_id' => '596446851',
			'password' => bcrypt('password'),
			'phone_number' => '+1(515)708-1641',
			'photo_path' => 'image/user_596446851.jpg',
	        'is_admin' => 1,
	        'major' => 'Electrical Engineering',
        ));

        User::create(array(  	  
			'first_name' => 'Edward',
			'last_name' => 'Droesch',
			'email' => 'edroesch@iastate.edu',
			'student_id' => '858972112',
			'password' => bcrypt('password'),
			'phone_number' => '+1(319)423-2155',
			'photo_path' => 'image/user_858972112.jpg',
	        'is_admin' => 1,
	        'major' => 'Computer Engineering',
        ));

        User::create(array(  	  
			'first_name' => 'Ahmad Ekram',
			'last_name' => 'Othman',
			'email' => 'ekram@iastate.edu',
			'student_id' => '858972111',
			'password' => bcrypt('password'),
			'phone_number' => '+1(515)708-3622',
			'photo_path' => 'image/user_858972111.jpg',
	        'is_admin' => 0,
	        'major' => 'Mechanical Engineering',
        ));
    }
}
