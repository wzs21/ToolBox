<?php

use Illuminate\Database\Seeder;
use App\Drawer;

class DrawersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->delete();

        Drawer::create(array(
	        'name' => 'Screwdrivers',
	        'total' => 15,
	        'available' => 15,
	        'photo' => 'image/drawer/drawer_screwdrivers.jpg',
	    ));

	    Drawer::create(array(
	        'name' => 'Hammers',
	        'total' => 10,
	        'available' => 10,
	        'photo' => 'image/drawer/drawer_hammers.jpg',
	    ));

	   	Drawer::create(array(
	        'name' => 'Wrenches',
	        'total' => 17,
	        'available' => 17,
	        'photo' => 'image/drawer/drawer_wrenches.jpg',
	    ));

	   	Drawer::create(array(
	        'name' => 'Pliers',
	        'total' => 6,
	        'available' => 6,
	        'photo' => 'image/drawer/drawer_pliers.jpg',
	    ));
    }
}
